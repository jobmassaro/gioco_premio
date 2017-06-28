<?php 

session_start();
include('include/mysql.inc.php');


$view = '';
$credito = 0;
$textPremi = '';

$today 	= date('Y-m-d');
$ora	= date('H:i:s');

if($_SERVER['REQUEST_METHOD'])
{
    if(isset($_GET['cliente']))
    {
        $cliente = $_GET['cliente'];
        $_SESSION['cliente'] = $cliente;
       
       if ($result = $dbc->query("SELECT * FROM ".newgiocata." WHERE cliente = '$cliente' AND `risultato`='VINTO' AND `ritirato` = 'F'")) 
		    if ($obj = $result->fetch_object()) 
			{
				$textPremi = "<p class='label'><b>Hai un premio da ritirare all'infopoint!</b></p>"; 
			
			}
				
			

		if ($result = $dbc->query("SELECT SUM(credito) AS credito, SUM(usato) AS usato FROM ".newcredito." WHERE cliente = '$cliente'")) 
		{
				
			
			$obj = $result->fetch_object();

			if (!isset($obj->credito)) 
				$view = 'ERROR';
			else
			{
				$credito = $obj->credito - $obj->usato;
                if ($credito == 0) 
					$view = 'CREDIT';
			}
		}
        
    } else
        $view = 'LOOP';
    
    if ($result = $dbc->query("SELECT * FROM ".newgiornata." WHERE `data` = DATE('$today') AND TIME('$ora') > `inizio` AND TIME('$ora') < `fine` LIMIT 1")) 
    {
		
        if ($obj 	= $result->fetch_object())
		{
		
			$inizio		=	$obj->inizio; 
			$fine		=	$obj->fine; 
		
		}
	    else
			$view = 'END';
    }
    if ($view == '')
	{
		$inizio = new DateTime(date('H:i', strtotime($inizio)));
		
		$fine 	= new DateTime(date('H:i', strtotime($fine))); 
		$ora 	= new DateTime(date('H:i'));
		
		$trascorsi 	= ($inizio->diff($ora)->h * 60) 	+ $inizio->diff($ora)->i;
		
		$range 		= ($inizio->diff($fine)->h * 60) 	+ $inizio->diff($fine)->i;
		$rimanenti 	= ($ora->diff($fine)->h * 60) 		+ $ora->diff($fine)->i;
		// Giornata

		
		// Premi

		//echo "SELECT SUM(tot) AS tot, SUM(usciti) AS usciti FROM ".newpremi." WHERE `data` = DATE('$today')";
		
		
		if ($result = $dbc->query("SELECT SUM(tot) AS tot, SUM(usciti) AS usciti FROM ".newpremi." WHERE `data` = DATE('$today')")) 
		{ 
			if ($obj 	= $result->fetch_object())
			{
				$premiVinti	=	$obj->usciti; 
				$premiTOT	=	$obj->tot;
			}
			else
			{
				// exit('Premi mancanti.');
			}	
		}
        if ($premiTOT)
		{
			//echo $premiTOT .'<br />';
			// Fasce
			$fasceMin 	= 	(($inizio->diff($fine)->h * 60) + $inizio->diff($fine)->i) / $premiTOT;
			$fasceN		= 	ceil($trascorsi/$fasceMin);
			$fasceMin = floor($fasceMin);
			
			$fasceInizio 	= new DateTime(date($inizio->format('Y-m-d H:i')));
			$fasceInizio 	= $fasceInizio->add(new DateInterval('PT' . abs($fasceMin*($fasceN-1)) . 'M'));
		
			$fasceFine 		= new DateTime(date($fasceInizio->format('Y-m-d H:i')));
			$fasceFine 		= $fasceFine->add(new DateInterval('PT' . $fasceMin . 'M'));

			//fasceTrascorsi = minuti trascorsi nella fascia attuale 
			$fasceTrascorsi 	= ($fasceInizio->diff($ora)->h * 60) 		+ $fasceInizio->diff($ora)->i;

			$fasceRange 		= ($fasceInizio->diff($fasceFine)->h * 60) 	+ $fasceInizio->diff($fasceFine)->i;
			$fasceRimanenti 	= ($ora->diff($fasceFine)->h * 60) 			+ $ora->diff($fasceFine)->i;
			// Fasce
			
			
			$probFinale = 20;
			$probIniziale = 1;
			
			$premi = $fasceN - $premiVinti;
			
			// Estrazione
			$incremento = ($probFinale - $probIniziale) / ($fasceRange);
			$prob = intval(($probIniziale + ($incremento * $fasceTrascorsi))*$premi);
			$probpercentuale = $probIniziale + ($incremento * $fasceTrascorsi);
			$random = mt_rand(1,100);
			if ((($ora->diff($fine)->h * 60) + $ora->diff($fine)->i) < 30) $prob = 50*$premi;
			if ($random <= $prob) $vinto = true; else $vinto = false;
			// Estrazione
			
            //insert into log estrazione 

			/*echo $h;
			echo $m;*/

			

                $sql ="INSERT INTO " .LOG_ESTRAZIONI." 
                    (
                        DATA,
                        K,
                        PERCENTUALETOTALE,
                        PROBPERCENTUALE,
                        FASCIACORRENTE,
                        RANDOM,
                        MINUTOATTUALE,
                        INC_PERC_AL_MIN,
                        DURFASCIA,
                        ORAINIZIO,
                        ORAFINE,
                        TTRASCORSO,
                        TOTPREMI ) 
                        VALUES 
                        (
                            NOW(),
                             {$premi},
                            '{$prob}',
                            '{$probpercentuale }',
                            '{$fasceN}',
                            '{$random}',
                            '{$fasceTrascorsi}',
                            '{$incremento}',
                            '{$fasceMin}',
                            '". strtotime($inizio). "',
                            '". strtotime($fine) ."',
                            '{$trascorsi}',
                            '{$premiTOT}')";
                            
						
                    $result = $dbc->query($sql);

                    $dbc->query("UPDATE ".newcredito." SET `usato` = `usato` + 1 WHERE cliente = '$cliente' AND credito > usato LIMIT 1");
			if ($cliente == '55842') $vinto = false;
			if ($cliente == '19262') $vinto = false;
			if ($vinto)
			{
				$sql = 
				"
				SELECT id, nome 
				FROM
				(
					SELECT id,data, nome, tot, usciti
					FROM ".newpremi." p JOIN
					(
						SELECT a.N + b.N * 10 + 1 n
						FROM 
						(SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) a,
						(SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) b
					) n
					ON n.n <= p.tot-p.usciti
					WHERE data = DATE('$today')
				) x
				ORDER BY RAND() LIMIT 1
				";

				
				//if ($result = $connessione->query("SELECT id, nome FROM ".newpremi." WHERE `data` = DATE('$today') AND `tot` > `usciti` ORDER BY RAND() LIMIT 1")) { 
				if($fasceN == 1)
				{
					$sql = "SELECT id,nome FROM ".newpremi." WHERE data = DATE('$today') LIMIT 1";
						
				}
				if ($result = $dbc->query($sql)) 
				{ 
					if ($obj 	= $result->fetch_object())
					{
						$premioId	=	$obj->id; 
						$premioNome	=	$obj->nome;
					}
				}

				$dbc->query("UPDATE ".newpremi." SET `usciti` = `usciti` + 1 WHERE id = $premioId");
				$dbc->query("INSERT INTO ".newgiocata." (cliente, risultato, premio) VALUES ('$cliente','VINTO','$premioNome')");
				$view = 'WIN';
			}
			else
			{
				$dbc->query("INSERT INTO ".newgiocata." (cliente, risultato) VALUES ('$cliente','PERSO')");
				$view = 'LOSE';
			}
		}
	}
	
    $credito--; //Credito dopo l'estrazione
	//if ($result = $connessione->query("SELECT nome FROM ".accreditamento." WHERE cod = '$cliente'")) if ($obj = $result->fetch_object()) $cliente = $obj->nome;

	if ($result = $dbc->query("SELECT nome FROM ".ACCREDITAMENTO." WHERE barcode = '$cliente'")) 
		if ($obj = $result->fetch_object()) $cliente = $obj->nome;

/*            
echo '<h1>Test'. $view .'</h1>';

die();
  */  
}

?>
<?php   
if($view=='LOSE'){?>
<!DOCTYPE html>
<html ng-app="app">
    <head>
        <title>MAXIMALL COLORI D'ESTATE</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
                .alert-purple {  height:200px; background-image: url("images/giallo.png"); }
                .alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; height:300px; }
                .alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff;height:300px; }
                .alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; height:300px; }
                .alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; height:300px; }
                .glyphicon { margin-right:10px; }
                .alert a {color: gold;}

                body{
                    background-image: url("images/sfondoarancio.jpg");
                }
                
                #headerGiallo {
                    width: 1010px;
                    height: 390px;
                    background: url("images/giallo.png") no-repeat;
                    margin-bottom:50px;
                }

        </style>
    
    </head>
    <body>
        
                <div class="container" ng-controller="MainCtrl">
                    <img src="images/scrittacolori.png">
                    
                    <div class="row">
                        <div class="col-md-12" ng-if="totale100 != 100" >

                                
                                <a href="tabellone1.php?cliente=<?= $cliente?>" ng-if="totaleA != 25" >
                                    <div id="headerGiallo"></div>
                                </a>
                                
                                 <div ng-if="totaleA == 25" class="alert alert-purple alert-dismissable">
                                    <p>{{totaleA}}</p>
                                </div>

                                <!-- -->
                                <h1>{{t.totaleB}}</h1>
                                 <a href="tabellone2.php?cliente=<?= $cliente?>" ng-if="totaleB != 25">
                                      <img src="images/rosso.png">
                                </a>
                                 <div ng-if="totaleB == 25" class="alert alert-info-alt alert-dismissable">
                                    <p>{{totaleB}}</p>
                                </div>
                                <!-- -->

                                 <!-- -->
                                 <a href="tabellone3.php?cliente=<?= $cliente?>" ng-if="totaleC != 25">
                                     <img src="images/verde.png">
                                </a>
                                 <div ng-if="totaleC == 25" class="alert alert-danger-alt alert-dismissable">
                                    <p>{{totaleC}}</p>
                                </div>
                                <!-- -->

                                   <!-- -->
                                 <a href="tabellone4.php?cliente=<?= $cliente?>" ng-if="totaleD != 25">
                                     <img src="images/azzurro.png">
                                </a>
                                 <div ng-if="totaleD == 25" class="alert alert-danger-alt alert-dismissable">
                                     <p>{{totaleD}}</p>
                                </div>
                                <!-- -->
                               


                         
                        </div>
                        <div class="col-md-12" ng-if="totale100 == 100" >
                            <h1>{{totale100}}</h1>
                            <script>
                              swal({
                                    title: "Azzeramento del Tabellone!",
                                    text: "Attendere qualche secondo.",
                                    timer: 2000,
                                    showConfirmButton: false
                                },
                                    function(){
                                    setTimeout(function(){
                                        location.reload();
                                    }, 1000);

                                    });
                                
                            </script>
                        </div>
                    </div>
                </div>

    </body>
       <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
      <script src="js/tabellone.js"></script>    
      <script src="dist/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

</html>
<?php } ?>
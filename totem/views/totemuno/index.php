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
       
      /* PRIMO STEP */
      /* Controllo ORA e GIORNO DEL GIOCO */ 

       if ($result = $dbc->query("SELECT * FROM ".newgiornata." WHERE `data` = DATE('$today') AND TIME('$ora') > `inizio` AND TIME('$ora') < `fine` LIMIT 1")) 
       {
            if ($obj 	= $result->fetch_object())
	    	{
		       	$inizio		=	$obj->inizio; 
			    $fine		=	$obj->fine; 

                //Controllo i crediti la somma dei CREDITI/USATO presenti 
                if ($result = $dbc->query("SELECT SUM(credito) AS credito, SUM(usato) AS usato FROM ".newcredito." WHERE cliente = '$cliente'")) 
                {
                    $obj = $result->fetch_object();

                    if (!isset($obj->credito)) 
                    {
                        //Se non sei stato riconosciuto con il BARCODE/CF MOSTRA errore.
                        //$view = 'ERROR';
                        header('location: error.php');
                    }else
                    {
                        $credito = $obj->credito - $obj->usato;
                        
                        //Se il credito è uguale a ZERO 
                        if ($credito == 0) 
                        {
                            header('location: credito.php');
                            //$view = 'CREDIT'; // Se non hai credito 

                        }else{
                            //Se hai credito PRELEVO il CREDITO

                            //Prelevo i crediti usati 
                            $sql="SELECT usato FROM ".newcredito." WHERE cliente='{$cliente}' LIMIT 1";
                            $usato = $dbc->query($sql)->fetch_object()->usato;


                            //Aggiorno il database con il credito usato ovvero incremento il valore di 'usato' di una UNITA'
                            $sql = "UPDATE ".newcredito." SET usato = '{$usato}' + 1 WHERE cliente = '$cliente' AND credito > usato LIMIT 1";
                            $dbc->query($sql);
                        }
                            
                    }
                }

		
		    }
	        else
            {
                // Gioco Chiuso !
			    $view = 'END';
            }
                
       }//Chiude il controllo della giornata ed ora

    } //Chiude $_GET

} //Chiude REQUEST_METHOD
      
      
      
      
      
      
      
      
      
      
      
      
      
      /*
      
      
      
      
      
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
					$view = 'CREDIT'; // Se non hai credito 
			}
		}
        //echo 'View'. $view;
        //die();
        
    } else
        $view = 'LOOP';
    
    //Controllo la data ed ora del GIOCO
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

    echo 'VIEW' . $view;
    die();
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

			
/*
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


/*echo '<h1>Test'. $view .'</h1>';

die();*/



?>

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
                .alert-purple {  height:200px; background-image: url("images/uno.png"); }
                .alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; height:300px; }
                .alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff;height:300px; }
                .alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; height:300px; }
                .alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; height:300px; }
                .glyphicon { margin-right:10px; }
                .alert a {color: gold;}

                body{
                    height :1920px;
                    width:1080px;
                    /*background-image: url("images/schermatacolori.png");*/
                }

                #headerGiallo {
                    width: 1010px;
                    height: 390px;
                    background: url("images/uno.png") no-repeat;
                    margin-bottom:50px;
                }

        </style>
    
    </head>
    <body>
        
        

                <div ng-controller="MainCtrl">

                    <img src="images/schermatacolori.png" usemap="#map1" border="0" ng-if="totaleA != 25 && totaleB != 25 && totaleC != 25 && totaleD != 25" />
                   <!-- singole -->
                    <img src="images/schermataA.png" usemap="#map1" border="0" ng-if="totaleA == 25 && totaleB != 25 && totaleC != 25 && totaleD != 25"  />     
                    <img src="images/schermataB.png" usemap="#map1" border="0" ng-if="totaleA != 25 && totaleB == 25 && totaleC != 25 && totaleD != 25" />  
                    <img src="images/schermataC.png" usemap="#map1" border="0" ng-if="totaleA != 25 && totaleB != 25 && totaleC == 25 && totaleD != 25" />  
                    <img src="images/schermataD.png" usemap="#map1" border="0" ng-if="totaleA != 25 && totaleB != 25 && totaleC != 25 && totaleD == 25" />  
                    <!-- end singole -->

                     
                     <img src="images/schermataABC.png" usemap="#map1" border="0" ng-if="totaleA == 25 && totaleB == 25 && totaleC == 25 && totaleD != 25"  />     
                     <img src="images/schermataABCD.png" usemap="#map1" border="0" ng-if="totaleA == 25 && totaleB == 25 && totaleC == 25 && totaleD == 25"  />     

                     <img src="images/schermataAB.png" usemap="#map1" border="0" ng-if="totaleA == 25 && totaleB == 25 && totaleC != 25 && totaleD != 25"  />     
                     <img src="images/schermataAC.png" usemap="#map1" border="0" ng-if="totaleA == 25 && totaleB != 25 && totaleC == 25 && totaleD != 25"  />     
                     <img src="images/schermataAD.png" usemap="#map1" border="0" ng-if="totaleA == 25 && totaleB != 25 && totaleC != 25 && totaleD == 25"  />     

                     <img src="images/schermataBC.png" usemap="#map1" border="0" ng-if="totaleA != 25 && totaleB == 25 && totaleC == 25 && totaleD != 25"  />     
                     <img src="images/schermataBD.png" usemap="#map1" border="0" ng-if="totaleA != 25 && totaleB == 25 && totaleC != 25 && totaleD == 25"  />     

                     <img src="images/schermataCD.png" usemap="#map1" border="0" ng-if="totaleA != 25 && totaleB != 25 && totaleC == 25 && totaleD == 25"  />     
                     <img src="images/schermataBCD.png" usemap="#map1" border="0" ng-if="totaleA != 25 && totaleB == 25 && totaleC == 25 && totaleD == 25"  />     

                     <img src="images/schermataACD.png" usemap="#map1" border="0" ng-if="totaleA == 25 && totaleB != 25 && totaleC == 25 && totaleD == 25"  />     
                    <img src="images/schermataABD.png" usemap="#map1" border="0" ng-if="totaleA == 25 && totaleB == 25 && totaleC != 25 && totaleD == 25"  />     

                    
                    <div class="row">
                        <div class="col-md-12" ng-if="totale100 != 100" >

                                <map name="map1">

	                                <area shape="RECT" coords="61,416,1051,653" href="tabellone1.php?cliente=<?= $cliente?>" ng-if="totaleA != 25"/>
                               
                                    <area shape="RECT" coords="61,416,1051,653" ng-if="totaleA == 25"/>
                                    
                                <!-- -->
                                    <area shape="RECT" coords="32,789,964,1024" href="tabellone2.php?cliente=<?= $cliente?>" ng-if="totaleB != 25"/>
                                
                                    <area shape="RECT" coords="32,789,964,1024" ng-if="totaleB == 25"/>

                                <!-- -->

                                    <area shape="RECT" coords="71,1159,1007,1410" href="tabellone3.php?cliente=<?= $cliente?>" ng-if="totaleC != 25"/>
                                
                                    <area shape="RECT" coords="71,1159,1007,1410" ng-if="totaleC == 25"/>

                                 <!-- -->

                                    <area shape="RECT" coords="32,1492,996,1762" href="tabellone4.php?cliente=<?= $cliente?>" ng-if="totaleD != 25"/>
                                
                                    <area shape="RECT" coords="32,1492,996,1762" ng-if="totaleD == 25"/>
                                <!-- -->
                                </map>


                        </div>
                        <div class="col-md-12" ng-if="totale100 == 100" >
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

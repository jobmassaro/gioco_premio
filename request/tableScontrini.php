<?php 

use Models\Action;


include('../inc/mysql.inc.php');


$check = null;
$importo = str_replace(',','.',$_GET['importo']);
$barcode = $_GET['barcode'];
$esercizio = $_GET['esercizio'];
$numero = $_GET['numero'];
//$data = $_GET['data'];
$data = date("Y-m-d");
$voto = $_GET['voto'];
$today = date("Y-m-d");


$check =$_GET['check'];

if($check ==''||$check ==null )
    $check = 0;
else{
    $check = 1;
}


$giococompleto = Action::ControlloCompleto($dbc);
$getEsercizio = Action::controlloinsegna($esercizio,$dbc);

$completo = $giococompleto->completo;
$coupon = $giococompleto->coupon;
$contascontrini = $giococompleto->contascontrini;

$quesito = $giococompleto->quesito;

$today = date("Y-m-d");
$carrello = Action::scaricocarrello($today,$dbc);
$valore = "-".$carrello->scontrino." days";
//$dataValida = date("Y-m-d", strtotime ($valore));
$dataValida = date("Y-m-d");
$switch_c = null;
$switch = null;


    if ($data < $dataValida) 
    { 
        echo "LO SCONTRINO NON HA DATA VALIDA"; die; 
    }
    $id_user =$_SESSION['user_id'];

    //SOlo per Maximall per evitare di rifare gran parte del codice 2017-06-15

    $controllobarcode = 1; //Action::controllobarcode ($barcode,$dbc);

    
    $controlloscontrini = Action::contascontrini($barcode,$dbc);

    
    if ($controllobarcode) 
    { 
        $crediti = Action::calcolaGiocate ($importo, $esercizio,$dbc);
        if($crediti === null)
        {
            $crediti = 1;
        }
         
            //echo $crediti;
            // Controllo che sia valorizzato UNION check la CARD 
        if($check==1)
        {

            $sql = "SELECT selfie  FROM ".DB_NAME.".".newcredito." WHERE cliente = '{$barcode}'";
            $selfie = $dbc->query($sql)->fetch_object()->selfie;

            if($selfie == 0 || $selfie == null)
            {
                $sql2 = "UPDATE ".DB_NAME.".".newcredito." set selfie={$check} WHERE cliente = '{$barcode}'";
                mysqli_query($dbc,$sql2);
                $row = mysqli_affected_rows($dbc);
                if($row == 1)
                    $crediti++;
                else
                {
                     $crediti++;
                     $flag = 1;
                }
            }
            
        }
    
        
        if ($contascontrini) 
        {
            if ($controlloscontrini >= $contascontrini) 
            { 
                echo "HAI CARICATO <b style='font-size:20px;'>" . $contascontrini . "</b> SCONTRINI NELLA GIORNATA DI OGGI, TORNA LA <b>PROSSIMA VOLTA</b>"; die;
            }
        }

        if ($crediti) 
         { 
            if ($giococompleto->uovo) 
            {
                $numerouova = Action::ControlloUovo($crediti);
?>

	<div id="tableInserimentoUova"></div>
    <?php
            }else{
  


        $switch = null;
        /* controllo crediti in nella tabella newcredito */
        /*vcredito = usata per la visualizzazione a video */

        $vcredito = $crediti;

        $sql ="SELECT credito FROM ".DB_NAME.".".newcredito." WHERE cliente ='{$barcode}'";
        $credito_presente = $dbc->query($sql)->fetch_object()->credito;
       
       
        $sql ="SELECT usato FROM ".DB_NAME.".".newcredito." WHERE cliente ='{$barcode}'";
        $usato_presente = $dbc->query($sql)->fetch_object()->usato;
        $crediti = $crediti + ($credito_presente - $usato_presente);

       

        /*if($crediti <= 5)
        {*/
                $sql ="SELECT insegna FROM ".DB_NAME.".".PV." WHERE id ='{$esercizio}'";
                $nome_puntovendita = $dbc->query($sql)->fetch_object()->insegna;

                //Check se la card/barcode è presente nel database
                
                $update ="SELECT cliente FROM ".DB_NAME.".".newcredito." WHERE cliente ='{$barcode}'";
                $cliente = $dbc->query($update)->fetch_object()->cliente;


                
                $sql ="SELECT selfie FROM ".DB_NAME.".".newcredito." WHERE cliente ='{$barcode}'";
                $selfie = $dbc->query($sql)->fetch_object()->selfie;

               
                if( ($selfie == 0 || $selefie == null) && ($pv == 'SELFIE'))
                {

                    $crediti = $vcrediti++;
                    $importo = 1;
                    $numero = 'X';

                }else{

                    if($selfie == 1 && $pv == 'SELFIE')
                    {
                        echo 'hai già utilizzato il tuo credito omaggio selfie per questo concorso!';
                        die();
                    }

                   /* echo $selfie .'<br/>';
                    echo $check .'<br/>';
                    echo $pv .'<br/>';*/

                    if($selfie == 1 && $pv != 'SELFIE' && $check == 1)
                    {
                        $importo = 1;
                        echo 'già usato il tuo credito! <br />';
                        
                    }
                    
                }

                
                if($cliente == null)
                {
                    if($flag === 1)
                    {
                        $insert = "INSERT INTO ".DB_NAME.".".newcredito." (cliente,credito,selfie)VALUES ('$barcode','$crediti',1)";
                    }                        
                    else
                    {
                        $insert = "INSERT INTO ".DB_NAME.".".newcredito." (cliente,credito)VALUES ('$barcode','$crediti')";
                        
                    }
                        mysqli_query($dbc,$insert);
                        echo "<br>CARICATA " . $vcredito . " Giocata<br><br>";
                        

                }else
                {
                     $sql ="SELECT credito FROM ".DB_NAME.".".newcredito." WHERE cliente ='{$barcode}'";
                     $credito_presente = $dbc->query($sql)->fetch_object()->credito;
                     $credito_update = $vcredito +$credito_presente;
                     
                    //Controllo ultimo credito a disposizione del barcode per poter effettuare la somma
                    $update = "UPDATE ".DB_NAME.".".newcredito." SET credito='{$credito_update}' WHERE cliente='{$cliente}'";
                    mysqli_query($dbc,$update);
                    echo "<br>CARICATA " . $vcredito . " Giocata<br><br>";
                
                }





                 if($check==1 )
                 {
                       $query = "INSERT INTO ".DB_NAME.".".SCONTRINO." (
                            data_caricamento,
                            idesercizio,
                            importo,
                            giocate_rimaste,
                            operatore,
                            giocate_assegnate,
                            numero_scontrino,
                            data_scontrino,
                            barcode,
                            nome_puntovendita,
                            card
                            )
                            VALUES ( 
                            '".date("Y-m-d H:i:s")."', 
                            '$esercizio', 
                            '$importo', 
                            '$crediti', 
                            '$id_user', 
                            '$crediti',
                            '$numero',
                            '".date("Y-m-d H:i:s")."', 
                            '$barcode',
                            '$nome_puntovendita',
                            'SI'
                            )";

                    }else
                    {
                        if($importo==null)
                            $importo=1;


                        $query = "INSERT INTO ".DB_NAME.".".SCONTRINO." (
                                data_caricamento,
                                idesercizio,
                                importo,
                                giocate_rimaste,
                                operatore,
                                giocate_assegnate,
                                numero_scontrino,
                                data_scontrino,
                                barcode,
                                nome_puntovendita                    
                                )
                                VALUES ( 
                                '".date("Y-m-d H:i:s")."', 
                                '$esercizio', 
                                '$importo', 
                                '$crediti', 
                                '$id_user', 
                                '$crediti',
                                '$numero',
                                '".date("Y-m-d H:i:s")."', 
                                '$barcode',
                                '$nome_puntovendita'
                                )";
                    }
                    //echo $query;
                     mysqli_query($dbc,$query);
        /*}else{
            echo "<br>IMPOSSIBILE CARICARE <b style='font-size:18px;'>" . $vcredito . "</b> GIOCATE IN QUANTO LA CARD CONTIENE GIA' <b style='font-size:18px;'>" .($credito_presente - $usato_presente)."</b> GIOCATE, SUPERANDO IL LIMITE DI <b style='font-size:18px;'> 5 </br><br/>";
        }//chiudo if*/
    

    }} else {
echo "DEVI CARICARE ALMENO " . $getEsercizio->valore . " EURO";
} } else { 
echo "LA CARD NON ESISTE";
}
?>

  
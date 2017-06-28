<?php  

session_start();
include('../include/mysql.inc.php');


$data = json_decode(file_get_contents("php://input")); 

$valore = mysqli_real_escape_string($dbc, $data->valore);

$lettera = mysqli_real_escape_string($dbc, $data->lettera);

if($valore == 0 )
{
    $sql = "UPDATE " .DB_NAME.".".TABELLONE." SET {$lettera} = 1 WHERE id = 1";
    $rs=mysqli_query($dbc,$sql);
}
$arr[] =$_SESSION['cliente'];

echo json_encode($arr);

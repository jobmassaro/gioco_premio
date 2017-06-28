<?php

include('../include/mysql.inc.php');


$data = json_decode(file_get_contents("php://input")); 

$sql = "SELECT sum(A1+A2+A3+A4+A5+A6+A7+A8+A9+A10+A11+A12+A13+A14+A15+A16+A17+A18+A19+A20+A21+A22+A23+A24+A25+B26+B27+B28+B29+B30+B31+B32+B33+B34+B35+B36+B37+B38+B39+B40+B41+B42+B43+B44+B45+B46+B47+B48+B49+B50+C51+C52+C53+C54+C55+C56+C57+C58+C59+C60+C61+C62+C63+C64+C65+C66+C67+C68+C69+C70+C71+C72+C73+C74+C75+D76+D77+D78+D79+D80+D81+D82+D83+D84+D85+D86+D87+D88+D89+D90+D91+D92+D93+D94+D95+D96+D97+D98+D99+D100) as totale100 FROM ".DB_NAME.".".TABELLONE;
$rs=mysqli_query($dbc,$sql);

if (mysqli_num_rows($rs) > 0) 
{
        while ($r = mysqli_fetch_array($rs, MYSQLI_ASSOC))
        {
            $arr[] = $r;

        }
}

 echo json_encode($arr);	


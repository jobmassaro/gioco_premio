<?php


require('./inc/mysql.inc.php');

$page_title = 'MAXIMALL -';

//include('./includes/header.php');

//$r = mysqli_query($dbc, "SELECT * FROM test");
/*
$script = "CREATE TABLE `beta`.`maximall_tabellone` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `A1` INT(3) NOT NULL DEFAULT 0,
  `A2` INT(3) NOT NULL DEFAULT 0,
  `A3` INT(3) NOT NULL DEFAULT 0,
  `A4` INT(3) NOT NULL DEFAULT 0,
  `A5` INT(3) NOT NULL DEFAULT 0,
  `A6` INT(3) NOT NULL DEFAULT 0,
  `A7` INT(3) NOT NULL DEFAULT 0,
  `A8` INT(3) NOT NULL DEFAULT 0,
  `A9` INT(3) NOT NULL DEFAULT 0,
  `A10` INT(3) NOT NULL DEFAULT 0,
  `A11` INT(3) NOT NULL DEFAULT 0,
  `A12` INT(3) NOT NULL DEFAULT 0,
  `A13` INT(3) NOT NULL DEFAULT 0,
  `A14` INT(3) NOT NULL DEFAULT 0,
  `A15` INT(3) NOT NULL DEFAULT 0,
  `A16` INT(3) NOT NULL DEFAULT 0,
  `A17` INT(3) NOT NULL DEFAULT 0,
  `A18` INT(3) NOT NULL DEFAULT 0,
  `A19` INT(3) NOT NULL DEFAULT 0,
  `A20` INT(3) NOT NULL DEFAULT 0,
  `A21` INT(3) NOT NULL DEFAULT 0,
  `A22` INT(3) NOT NULL DEFAULT 0,
  `A23` INT(3) NOT NULL DEFAULT 0,
  `A24` INT(3) NOT NULL DEFAULT 0,
  `A25` INT(3) NOT NULL DEFAULT 0,
  `B26` INT(3) NOT NULL DEFAULT 0,
  `B27` INT(3) NOT NULL DEFAULT 0,
  `B28` INT(3) NOT NULL DEFAULT 0,
  `B29` INT(3) NOT NULL DEFAULT 0,
  `B30` INT(3) NOT NULL DEFAULT 0,
  `B31` INT(3) NOT NULL DEFAULT 0,
  `B32` INT(3) NOT NULL DEFAULT 0,
  `B33` INT(3) NOT NULL DEFAULT 0,
  `B34` INT(3) NOT NULL DEFAULT 0,
  `B35` INT(3) NOT NULL DEFAULT 0,
  `B36` INT(3) NOT NULL DEFAULT 0,
  `B37` INT(3) NOT NULL DEFAULT 0,
  `B38` INT(3) NOT NULL DEFAULT 0,
  `B39` INT(3) NOT NULL DEFAULT 0,
  `B40` INT(3) NOT NULL DEFAULT 0,
  `B41` INT(3) NOT NULL DEFAULT 0,
  `B42` INT(3) NOT NULL DEFAULT 0,
  `B43` INT(3) NOT NULL DEFAULT 0,
  `B44` INT(3) NOT NULL DEFAULT 0,
  `B45` INT(3) NOT NULL DEFAULT 0,
  `B46` INT(3) NOT NULL DEFAULT 0,
  `B47` INT(3) NOT NULL DEFAULT 0,
  `B48` INT(3) NOT NULL DEFAULT 0,
  `B49` INT(3) NOT NULL DEFAULT 0,
  `B50` INT(3) NOT NULL DEFAULT 0,
  `C51` INT(3) NOT NULL DEFAULT 0,
  `C52` INT(3) NOT NULL DEFAULT 0,
  `C53` INT(3) NOT NULL DEFAULT 0,
  `C54` INT(3) NOT NULL DEFAULT 0,
  `C55` INT(3) NOT NULL DEFAULT 0,
  `C56` INT(3) NOT NULL DEFAULT 0,
  `C57` INT(3) NOT NULL DEFAULT 0,
  `C58` INT(3) NOT NULL DEFAULT 0,
  `C59` INT(3) NOT NULL DEFAULT 0,
  `C60` INT(3) NOT NULL DEFAULT 0,
  `C61` INT(3) NOT NULL DEFAULT 0,
  `C62` INT(3) NOT NULL DEFAULT 0,
  `C63` INT(3) NOT NULL DEFAULT 0,
  `C64` INT(3) NOT NULL DEFAULT 0,
  `C65` INT(3) NOT NULL DEFAULT 0,
  `C66` INT(3) NOT NULL DEFAULT 0,
  `C67` INT(3) NOT NULL DEFAULT 0,
  `C68` INT(3) NOT NULL DEFAULT 0,
  `C69` INT(3) NOT NULL DEFAULT 0,
  `C70` INT(3) NOT NULL DEFAULT 0,
  `C71` INT(3) NOT NULL DEFAULT 0,
  `C72` INT(3) NOT NULL DEFAULT 0,
  `C73` INT(3) NOT NULL DEFAULT 0,
  `C74` INT(3) NOT NULL DEFAULT 0,
  `C75` INT(3) NOT NULL DEFAULT 0,
  `D76` INT(3) NOT NULL DEFAULT 0,
  `D77` INT(3) NOT NULL DEFAULT 0,
  `D78` INT(3) NOT NULL DEFAULT 0,
  `D79` INT(3) NOT NULL DEFAULT 0,
  `D80` INT(3) NOT NULL DEFAULT 0,
  `D81` INT(3) NOT NULL DEFAULT 0,
  `D82` INT(3) NOT NULL DEFAULT 0,
  `D83` INT(3) NOT NULL DEFAULT 0,
  `D84` INT(3) NOT NULL DEFAULT 0,
  `D85` INT(3) NOT NULL DEFAULT 0,
  `D86` INT(3) NOT NULL DEFAULT 0,
  `D87` INT(3) NOT NULL DEFAULT 0,
  `D88` INT(3) NOT NULL DEFAULT 0,
  `D89` INT(3) NOT NULL DEFAULT 0,
  `D90` INT(3) NOT NULL DEFAULT 0,
  `D91` INT(3) NOT NULL DEFAULT 0,
  `D92` INT(3) NOT NULL DEFAULT 0,
  `D93` INT(3) NOT NULL DEFAULT 0,
  `D94` INT(3) NOT NULL DEFAULT 0,
  `D95` INT(3) NOT NULL DEFAULT 0,
  `D96` INT(3) NOT NULL DEFAULT 0,
  `D97` INT(3) NOT NULL DEFAULT 0,
  `D98` INT(3) NOT NULL DEFAULT 0,
  `D99` INT(3) NOT NULL DEFAULT 0,
  `D100` INT(3) NOT NULL DEFAULT 0,  
  PRIMARY KEY (`id`));";

  $result=mysqli_query($dbc,$script);
*/
/*
  for($i=1;$i<=100;$i++)
  {
      $insert ="INSERT INTO `beta`.`maximall_tabellone` (`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`, `61`, `62`, `63`, `64`, `65`, `66`, `67`, `68`, `69`, `70`, `71`, `72`, `73`, `74`, `75`, `76`, `77`, `78`, `79`, `80`, `81`, `82`, `83`, `84`, `85`, `86`, `87`, `88`, `89`, `90`, `91`, `92`, `93`, `94`, `95`, `96`, `97`, `98`, `99`, `100`) VALUES ('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');";
      mysqli_query($dbc,$insert);
  }
INSERT INTO `beta`.`maximall_tabellone` (`A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A12`, `A13`, `A14`, `A15`, `A16`, `A17`, `A18`, `A19`, `A20`, `A21`, `A22`, `A23`, `A24`, `A25`, `B26`, `B27`, `B28`, `B29`, `B30`, `B31`, `B32`, `B33`, `B34`, `B35`, `B36`, `B37`, `B38`, `B39`, `B40`, `B41`, `B42`, `B43`, `B44`, `B45`, `B46`, `B47`, `B48`, `B49`, `B50`, `C51`, `C52`, `C53`, `C54`, `C55`, `C56`, `C57`, `C58`, `C59`, `C60`, `C61`, `C62`, `C63`, `C64`, `C65`, `C66`, `C67`, `C68`, `C69`, `C70`, `C71`, `C72`, `C73`, `C74`, `C75`, `D76`, `D77`, `D78`, `D79`, `D80`, `D81`, `D82`, `D83`, `D84`, `D85`, `D86`, `D87`, `D88`, `D89`, `D90`, `D91`, `D92`, `D93`, `D94`, `D95`, `D96`, `D97`, `D98`, `D99`, `D100`) VALUES ('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

*/


if(isset($_SESSION['user']))
{
    include('./accounts/index.php');
}else{

    include('./views/index.php');
}
//include('./includes/footer.php');

?>
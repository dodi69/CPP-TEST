<?php
//SELECT v.vprasanje,o.opis FROM vprasanja v INNER JOIN odgovori o ON o.id_vprasanja=v.id;
$cas = 10;
?>

<input type="radio" name="gender" value="male"> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<input type="radio" name="gender" value="other"> Other 

<meta http-equiv="refresh" content="<?php$cas?>;index.php" />  <!-- Refresha-->
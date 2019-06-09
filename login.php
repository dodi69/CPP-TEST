<?php
include_once './session.php';
include_once './db.php';
?>
<head>
    <link rel="stylesheet" type="text/css" href="loginregisterpage.css">
</head>
<div class="login-page">
  <div class="form">
    
      <form action="login_check.php" method="post" class="login-form">
      <input type="text" placeholder="email" name="email"/>
      <input type="password" placeholder="geslo" name="pass"/>
      <input type="submit" value="Prijava"/>
      <p class="message">Še nisi registriran?<a href="uporabnik_add.php"> Ustvari račun</a></p>
    </form>
  </div>
</div>

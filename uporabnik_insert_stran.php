<?php
    include_once './db.php';


    $email = $_POST['mail'];
    $pass1 = $_POST['pass'];




if(!empty($email) && !empty($pass1))
    {
        
        $pass = sha1($pass1);
        $query = "INSERT INTO uporabnik(mail,pass) VALUES('$email','$pass')";



mysqli_query($link, $query);

header("Location: uporabnik_show.php");

    }
  

?>
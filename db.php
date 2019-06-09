<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "projektbaza";


// Create connection
$link = mysqli_connect($servername, $username, $password, $db_name);
//Driver napaka popravek
mysqli_query($link, "SET NAMES 'utf8'");

        
$salt = 'aaaaaaaaaaaaa';
 
?>
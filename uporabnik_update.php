<?php
include_once './session.php';
include_once './db.php';

$id = $_POST['id'];
$mail = $_POST['mail'];
$pass = sha1($_POST['pass']);
$user_id = $_SESSION['user_id'];


$query = "UPDATE uporabnik SET mail='$mail', pass='$pass' WHERE id = $id";

mysqli_query($link,$query);        

header("Location: uporabnik_show.php");
?>
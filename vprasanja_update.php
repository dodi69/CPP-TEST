<?php
include_once './session.php';
include_once './db.php';

$id = $_POST['id'];
$naslov = $_POST['naslov'];
$vrednost = $_POST['vrednost'];
$user_id = $_SESSION['user_id'];



$query = "UPDATE vprasanja SET vprasanje='$naslov', vrednost='$vrednost' WHERE id = $id";

mysqli_query($link,$query);        

header("Location: vprasanja.php");
?>

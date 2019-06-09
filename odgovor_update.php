<?php
include_once './session.php';
include_once './db.php';


$id = $_POST['id'];  
$opis = $_POST['opis'];
$vrednost_odgovor = $_POST['vrednost_odgovor'];
$user_id = $_SESSION['user_id'];



$query = "UPDATE odgovori SET opis='$opis', vrednost_odgovor='$vrednost_odgovor' WHERE id = $id";


mysqli_query($link,$query);   


header("Location: vprasanja_edit.php?id=".$_SESSION['vpr_id']);//dodaj id za vprasanje 
?>
<?php
include_once './session.php';
include_once './db.php';

$vrednost_odgovor1 = $_POST ['vrednost1'];
$vrednost_odgovor2 = $_POST ['vrednost2'];
$vrednost_odgovor3 = $_POST ['vrednost3'];
$odgovor1 = $_POST ['odgovor1'];
$odgovor2 = $_POST ['odgovor2'];
$odgovor3 = $_POST ['odgovor3'];
$vprasanja = $_POST['vprasanje'];
$vrednost = $_POST['vrednost'];
//$user_id = $_SESSION['id'];
//$kategorija_id = $_POST['kategorija_id'];
$kategorija_id = 1;

var_dump($_POST);

if (!(empty($vprasanja)))
{
    $query1 = "INSERT INTO vprasanja (vprasanje, vrednost, kategorija_id) VALUES ('$vprasanja','$vrednost','$kategorija_id');";
    mysqli_query($link,$query1);
}

$query5 = "SELECT id FROM vprasanja ORDER BY id DESC LIMIT 1;";
$result = mysqli_query($link, $query5);
$find = mysqli_fetch_array($result);
$id_vprasanja = $find['id'];

if (!(empty ($odgovor1) && (empty($vrednost_odgovor1))))
{
    $query2 = "INSERT INTO odgovori (opis,vrednost_odgovor,id_vprasanja) VALUES ('$odgovor1',$vrednost_odgovor1,$id_vprasanja);";
    mysqli_query($link,$query2);
}
 
if (!(empty ($odgovor2) && (empty($vrednost_odgovor2))))
{
    $query3 = "INSERT INTO odgovori (opis,vrednost_odgovor,id_vprasanja) VALUES ('$odgovor2',$vrednost_odgovor2,$id_vprasanja);";
    mysqli_query($link,$query3);
}

if (!(empty ($odgovor3) && (empty($vrednost_odgovor3))))
{
    $query4 = "INSERT INTO odgovori (opis,vrednost_odgovor,id_vprasanja) VALUES ('$odgovor3',$vrednost_odgovor3,$id_vprasanja);";
    mysqli_query($link,$query4);
}


header("Location: vprasanja.php"); 
    

?> 
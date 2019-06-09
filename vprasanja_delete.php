<?php
    include_once './session.php';
    include_once './db.php';

    //$user_id = $_SESSION['user_id'];
    //$vprasanja=$_SESSION['vprasanja_id'];

    $vprasanja=$_GET['id'];
    
    $query = "DELETE FROM odgovori WHERE id_vprasanja=$vprasanja;";

    mysqli_query($link,$query);
    

    $query = "DELETE FROM vprasanja WHERE id=$vprasanja;";
    
    mysqli_query($link,$query);

    header("Location: vprasanja.php");
?>
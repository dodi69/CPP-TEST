<?php
    include_once './session.php';
    include_once './db.php';

    //$user_id = $_SESSION['user_id'];
    //$vprasanja=$_SESSION['vprasanja_id'];

    $uporabnik=$_GET['id'];

    $query = "DELETE FROM uporabnik WHERE id=$uporabnik;";
    
    mysqli_query($link,$query);

    header("Location: uporabnik_show.php");
?>
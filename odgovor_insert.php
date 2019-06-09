<?php
    include_once './db.php';


    $opis = $_POST['opis'];
    $vrednost_odgovor = $_POST['vrednost_odgovor'];





        
       
        $query = "INSERT INTO odgovori(opis,vrednost_odgovor) VALUES('$opis','$vrednost_odgovor')";



mysqli_query($link, $query);

header("Location: odgovor_edit.php");

 
  

?>
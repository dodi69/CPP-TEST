
<?php
    include_once './db.php';
   

    $vprasanje_id = $_GET['id'];
    $query = ("SELECT opis,vrednost_odgovor FROM odgovori WHERE id=$vprasanje_id");
   

    $result = mysqli_query($link, $query);
    $uporabnik = mysqli_fetch_array($result);
    
    
?>  
<form action=<?PHP ECHO 'odgovor_update.php?id='.$vprasanje_id; ?> method="post">
    <input type="hidden" name="id" value="<?php echo $vprasanje_id; ?>">
    <input type="text" name="opis" placeholder="odgovor" value="<?php echo $uporabnik['opis']; ?>" />
    <input cols="7" rows="7" name="vrednost_odgovor" placeholder="vrednost_odgovor" value="<?php echo $uporabnik['vrednost_odgovor']; ?>" />
    <input type="submit" name="vstavi"/>
    
         

        

</form>


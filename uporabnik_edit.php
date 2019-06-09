 <head>
     <link rel="stylesheet" type="text/css" href="stran.css">
</head> 
<?php
 
    include_once './db.php';
   

    $uporabnik_id = $_GET['id'];
    $query = "SELECT mail,pass FROM uporabnik WHERE id=$uporabnik_id";
   

    $result = mysqli_query($link, $query);
    $uporabnik = mysqli_fetch_array($result);
    
    
?>
<a href="uporabnik_show.php">Nazaj</a> 
<form action="uporabnik_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $uporabnik_id; ?>">
    <input type="text" name="mail" placeholder="mail" value="<?php echo $uporabnik['mail']; ?>" />
    <input cols="7" rows="7" name="pass" placeholder="pass" value="<?php echo $uporabnik['pass']; ?>" />
    
    
  
        
 

</form>

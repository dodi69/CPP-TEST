 <head>
     <link rel="stylesheet" type="text/css" href="stran.css">
</head> 
<?php
    include_once './db.php';
    session_start();
   

    $vprasanja_id = $_GET['id'];
    $query = "SELECT vprasanje FROM vprasanja WHERE id=$vprasanja_id";
    $vrednost = "SELECT vrednost FROM vprasanja  WHERE id=$vprasanja_id";

    $result = mysqli_query($link, $query);
    $vprasanja = mysqli_fetch_array($result);
    
    $result2 = mysqli_query($link, $vrednost);
    $vrednost = mysqli_fetch_array($result2);
?>

<form action="vprasanja_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $vprasanja_id; ?>">
    <input type="text" name="naslov" placeholder="Vnesi naslov" value="<?php echo $vprasanja['vprasanje']; ?>" />
    <input cols="7" rows="7" name="vrednost" placeholder="vrednost" value="<?php echo $vrednost['vrednost']; ?>" />
  
    <input type="submit" value="Update" />
    <?php
    $_SESSION['vpr_id'] = $vprasanja_id;
    ?>
</form>
<a href="vprasanja.php">Nazaj</a> 
<div>
<table border="1">
<?php
        $query = "SELECT * FROM odgovori WHERE id_vprasanja = $vprasanja_id";
        $result = mysqli_query($link, $query);
        
        while($row = mysqli_fetch_array($result))
        {
            $opis = $row['opis'];
            echo '<tr>';
            echo '<td>'.$opis.'</td>';
            echo '<td>'.$row['vrednost_odgovor'].'</td>';
            echo '<td>';

           /* echo '<a href="odgovor_delete.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure you want to delete this item?\')";>Delete</a>';
            echo "          ";*/
            echo '<a href="odgovor_edit.php?id='.$row['id'].'">Uredi</a>';
            echo '</td>';
            echo '</tr>';
        }
?>
</table>
   </div>
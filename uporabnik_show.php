<?php
include_once './db.php';
include_once './session.php';
?>


<html>
    <head>
        <meta charset="UTF-8">
      
        <link rel="stylesheet" type="text/css" href="stran.css">
 
        <title>Uporabniki</title>
    </head>
    <body>
        
      <a href="stran.php">Nazaj</a> 
        <table>
    <tr>
        <th>Mail</th>
        <th>Pass</th>
        
    </tr>
    <?php
        

        $query = "SELECT * FROM uporabnik";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            echo '<tr>';
            echo '<td>'.$row['mail'].'</td>';
           // echo '<td>'.$row['pass'].'</td>';
            echo '<td>';

            echo '<a href="uporabnik_delete.php?id='.$row['id'].'" onclick="return confirm(\'Ste prepričani da boste zbrisali?\')";>Delete</a>';
            echo "          ";
            echo '<a href="uporabnik_edit.php?id='.$row['id'].'">Edit</a>';

            echo '</td>';
            echo '</tr>';
        }

    ?>

</table>
    </body>
    <a href="uporabnik_add_stran.php">Dodaj uporabnik</a>
</html>

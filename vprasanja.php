<?php
include_once './db.php';
if(isset($_SESSION['user_id'])&&$_SESSION['user_id']!=18){
 header("Location:index.php");
}
include_once './session.php';
?>

<html>
      
    <head>
        <link rel="stylesheet" type="text/css" href="stran.css">
        <meta charset="UTF-8">
        <title>Vprašanja</title>
    </head>
    
    <body>
        < <a href="stran.php">Nazaj</a> 
        <div class="tm-logo-div text-xs-center">
                           
                            <div class="log">
                            <a href="logout.php">LOG OUT</a>
                            </div>
                            <h1 class="tm-site-name">CPP VPRAŠANJA</h1>
                        </div>
        <footer>
                                <p class="tm-copyright-p">Copyright &copy; <span class="tm-current-year">2017</span> Your Company 
                                
                                | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
                            </footer>
        <table>
    <tr>
        <th>Vprasanja</th>
        <th>Vrednost</th>
        <th>Akcije</th>
    </tr>
    <?php
        

        $query = "SELECT * FROM vprasanja";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            echo '<tr>';
            echo '<td>'.$row['vprasanje'].'</td>';
            echo '<td>'.$row['vrednost'].'</td>';
            echo '<td>';

            echo '<a href="vprasanja_delete.php?id='.$row['id'].'" onclick="return confirm(\'Ste ziher da boš izbrisal?\')";>Delete</a>';
            echo "          ";
            echo '<a href="vprasanja_edit.php?id='.$row['id'].'">Uredi</a>';

            echo '</td>';
            echo '</tr>';
        }

    ?>

</table>
    </body>
    <div id="dodaj">
    <a href="vprasanje_add.php">Dodaj vprašanje</a>
    </div>
</html>

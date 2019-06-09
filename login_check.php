<?php
include_once './session.php';
include_once './db.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$pass = sha1($pass);

$query = sprintf("SELECT * FROM uporabnik WHERE mail='%s' AND pass='%s'",$email,$pass);

$result = mysqli_query($link, $query);

if(mysqli_num_rows($result) == 1)
{
    $uporabnik = mysqli_fetch_array($result);
    $_SESSION['user_id'] = $uporabnik['id'];
    $_SESSION['tip'] = $uporabnik['tip'];
    header("Location: stran.php");
}
else
{
    
    header("Location: uporabnik_add.php");
}
//mysqli_real_escape_string($link, $email)
?>

<?php
include 'config.php';
session_start();
$_SESSION['error'] = "";
$_SESSION['prihlasenie'] = false;
if($_SERVER["REQUEST_METHOD"] == "POST") {

$myloginid = mysqli_real_escape_string($db,$_POST['loginid']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);

$sql = "SELECT menoID FROM uzivatelia WHERE menoID = '$myloginid' and Heslo = '$mypassword'";

$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$count = mysqli_num_rows($result);
if($count == 1) {
    $_SESSION['prihlasenie'] = true;
    $_SESSION['login_user'] = $myloginid;
    header("location: ./stranka.php");
}else {

    $_SESSION['error'] = "Zle meno alebo Priezvisko";

}
}
?>

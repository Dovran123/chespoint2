<?php

include 'config.php';
$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"select name,priezvisko from uzivatelia where menoID = '$user_check' ");

if ($ses_sql->num_rows > 0) {
    // output data of each row
    while($row = $ses_sql->fetch_assoc()) {
        $login_session =  $row["name"]. " " . $row["priezvisko"] ;
    }
} else {
    $login_session = "0 results";
}


if(!isset($_SESSION['login_user'])){
    header("location:./login.php");
    die();
}
?>
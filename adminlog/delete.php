<?php
include "config.php";
$id = $_GET['id'];
$selectqu = "SELECT * from blog where id= $id ";
$ResultSelectStmt = mysqli_query($db,$selectqu);
$fetchRecords = mysqli_fetch_assoc($ResultSelectStmt);

$fetchImgTitleName = $fetchRecords['imageurl'];
echo $fetchImgTitleName;
$createDeletePath = "../upload/".$fetchImgTitleName;
if(unlink($createDeletePath)) {

    $del = mysqli_query($db, "delete from blog where id = '$id'");

    if ($del) {
        mysqli_close($db);
        header("location: ../Nastavenie.php");
        exit;
    } else {
        header("location: ../Nastavenie.php");
        echo "Error deleting record";
    }
} else {
    echo "vsetko zle";
}
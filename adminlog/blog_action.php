<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    include 'config.php';
    include 'FileUploat.php';



    $subor = new FileUploat();
    $titul = mysqli_real_escape_string($db,$_POST['atitulok']);
    $meno = mysqli_real_escape_string($db,$_POST['meno']);

    if ($_SESSION['update'] == false) {
        $myFile = mysqli_real_escape_string($db, $_POST['myFile']);
    $filename = $_FILES['myFile']["name"];
    $filetmp = $_FILES['myFile']["tmp_name"];
    $filesize = $_FILES['myFile']["size"];
    $preslo = $subor->uploatFile($filename,$filetmp,$filesize);
}
    $tag = mysqli_real_escape_string($db,$_POST['tag']);
    $typ = mysqli_real_escape_string($db,$_POST['typ']);
    $text = mysqli_real_escape_string($db,$_POST['subject']);


    if ($_SESSION['update'] == false) {
        if ($preslo == 1)

            $sql = "INSERT INTO blog( Nazov, imageurl, directory, Meno, datum, typ, tag, text) VALUES ('$titul','$filename','./obrazky/','$meno',now() ,'$typ','$tag','$text')";

        if (mysqli_query($db, $sql)) {
            echo "Spojenie preslo";
            header("location: ../blog.php");

        } else {
            echo "nastala chyba";
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    } else {


        $idcko = mysqli_real_escape_string($db,$_POST['idcka']);
        $sql = "UPDATE blog set Nazov='$titul',Meno='$meno',datum= now(),typ='$typ',tag='$tag',text='$text' where id=$idcko";
        if ($db->query($sql) === TRUE) {
            echo "alert('vyslo to')";
            header("location: ../Nastavenie.php");
        } else {
            header( "location: ../Nastavenie.php");
            echo "Error updating record: " . $db->error;
        }
    }
}

$db->close();

?>




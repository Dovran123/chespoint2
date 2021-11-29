<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/vzhlad.css">
    <link rel="stylesheet" href="css/blog.css">
    <title>Blog</title>
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
    />

</head>
<body>
<?php
include 'zaklad/header.php';
include 'adminlog/pomocna.php';

$_SESSION['update'] = true;

?>

<div class="nastavenieblog">
    <table>
        <tr>
            <th>ID</th>
            <th>Nazov</th>
            <th>Edit/Delete</th>
        </tr>

        <?php $novy->vypisanie(); ?>
    </table>

</div>
  <?php
include "zaklad/schema.php";
?>
</body>
<script src="js/blog.js"></script>
</html>

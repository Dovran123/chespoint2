<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/vzhlad.css">
<title>Blog</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<?php include('./adminlog/logini_action.php') ?>
<?php include('./zaklad/header.php'); ?>

<div class="teloformu">
<div class="vyplnik">
<h1>Login</h1>
<form method="post" action="">
    <div>

        <label for="loginid"><b>NameID</b></label>
        <input type="text" id="loginid" name="loginid" value="" required>
    </div>
    <div>
        <label for="password"><b>Password</b></label>
        <input type="password" id="password" name="password" value="" required>
    </div>
    <input  class="medzer" type="submit" value="Submit">
</form>
    <div class="eroor">  <p> <?php echo  $_SESSION['error']    ?></p></div>
</div>

</div>

<?php
include "./zaklad/footer.php";
?>
</body>
</html>

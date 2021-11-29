<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">

    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/vzhlad.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

<?php include('zaklad/header.php'); ?>
<div class="bodycontakt" style="padding-left: 5%;padding-right: 5%">
    <div class="container">
        <h1>Contact</h1>
        <p>Let’s talk <img src="obrazky/ikonky/1f44b.svg" alt="svg" style="height:20px; width:20px" > Your child’s education and future is important to us! Don’t hesitate to reach out with the contact information below, or send a message using the form.</p>
</div></div>
<div class="hlavnetelocontakt">

    <div class="get-in-touch">
        <h1>Get in Touch</h1>
        <a class="mal" href="https://www.google.com/maps/search/99+Education+Way,+Stratford,+London,+GXVM+89+United+Kingdom/@51.5452143,-0.0132603,14z/data=!3m1!4b1">
            99 Education Way <br>
            Stratford, London GXVM+89 <br>
            United Kingdom <br>
        </a>
        <a class="mal" href="mailto:mail@example.com">mail@example.com <br></a>
        <a class="mal" href>(555) 555 1234</a>

    </div>
    <div class="sendus">
        <h1>Send Us a Message</h1>
        <form action="/action_page.php">
            <div>
            <label for="fname"><b>Name</b>(required)</label>
            <input type="text" id="fname" name="Name" value="">
            </div>
            <div>
            <label for="Email"><b>Email</b>(required)</label>
            <input type="text" id="Email" name="Email" value="">
            </div>
            <div>
            <label for="fweb"><b>Webside</b></label>
            <input type="text" id="fweb" name="Webside" value="">
            </div>
            <div>
            <label for="subject"> <b>Message</b>(required)</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            </div>
            <input  class="subm" type="submit" value="Submit">
        </form>
    </div>

</div>
<?php
include "zaklad/footer.php";
?>
</body>

</html>
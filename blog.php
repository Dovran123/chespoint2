<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/vzhlad.css">
    <title>Blog</title>
    <link rel="stylesheet" href="css/blog.css">

</head>
<body>
<?php include('zaklad/header.php'); ?>
<div class="nic"> <h1>School Fun Day</h1></div>
<div class="obrazok-blok"><img src="obrazky/blog/action-adult-carry-1378866 (1).jpg" alt=""></div>
<div class="text-blok" style="padding-left: 5%; padding-right: 5%;">
    <div class="container">
        <p>We hosted our fifth annual School Fun Day last week Wednesday, and it was such a fun time with our student’s families and friends.
        <br>
        <br>
        In keeping with our annual tradition, we’ve add a gallery of images from the events of the day below – enjoy!</p>
    </div>

</div>
<div class="blok-obrazky">
    <div class="container">
        <div class="speci">
            <div class="oby">
        <div class="">
            <img src="obrazky/blog/action-activity-balls-296302.jpg" onclick="Otvorit();vyslednyslaid(1)" alt="action-activity-balls">
        </div>
        <div class="medzery">
            <img src="obrazky/blog/action-activity-bouncy-castle-296308.jpg" onclick="Otvorit();vyslednyslaid(2)" alt="action-activity-bouncy-castle">
        </div>
        <div class=" ">

            <img src="obrazky/blog/action-activity-boy-296301.jpg" onclick="Otvorit();vyslednyslaid(3)" alt="action-activity-boy-296301.jpg">
        </div >
            </div>
            <div class="oby">
        <div class=" ">
            <img src="obrazky/blog/action-adult-carry-1378866.jpg" onclick="Otvorit();vyslednyslaid(4)" alt="action-adult-carry-1378866.jpg">
        </div>
        <div class="medzery">
            <img src="obrazky/blog/active-athletes-ball-2116469.jpg" onclick="Otvorit();vyslednyslaid(5)" alt="active-athletes-ball-2116469.jpg">
        </div>
        <div class="">

            <img src="obrazky/blog/boys-childhood-children-51349.jpg" onclick="Otvorit();vyslednyslaid(6)" alt="jpg">
        </div>
            </div>
        </div>
        <div class="ini">
            <img src="obrazky/blog/children-class-classroom-1720186.jpg" onclick="Otvorit();vyslednyslaid(7)" alt="jpg">
        </div>

    </div>
</div>
<div id="mojmodal" class="modal">
    <span class="close" onclick="zaviert()" >&times;</span>
    <div class="componety">
        <div class="mojslaid" >
            <img class="demo" src="obrazky/blog/action-activity-balls-296302.jpg" style="width:100%" alt="action-activity-balls">
            <div class="ocislovanie">1/7</div>
        </div>
        <div class="mojslaid">
            <img class="demo" src="obrazky/blog/action-activity-bouncy-castle-296308.jpg" style="width:100%" alt="action-activity-bouncy-castle">
            <div class="ocislovanie">2/7</div>
        </div>
        <div class="mojslaid">
            <img class="demo" src="obrazky/blog/action-activity-boy-296301.jpg" style="width:100%" alt="action-activity-boy">
            <div class="ocislovanie">3/7</div>
        </div>
        <div class="mojslaid">
            <img class="demo" src="obrazky/blog/action-adult-carry-1378866.jpg" style="width:100%" alt="action-adult-carry">
            <div class="ocislovanie">4/7</div>
        </div>
        <div class="mojslaid">
            <img class="demo" src="obrazky/blog/active-athletes-ball-2116469.jpg" style="width:100%" alt="active-athletes-ball">
            <div class="ocislovanie">5/7</div>
        </div>
        <div class="mojslaid">
            <img class="demo" src="obrazky/blog/boys-childhood-children-51349.jpg" style="width:100%" alt="boys-childhood-children">
            <div class="ocislovanie">6/7</div>
        </div>
        <div class="mojslaid">
            <img class="demo" src="obrazky/blog/children-class-classroom-1720186.jpg" style="width:100%" alt="boys-childhood-children">
            <div class="ocislovanie">7/7</div>
        </div>

    </div>
    <a class="prev" onclick="pripocitaj(-1)">&#10094;</a>
    <a class="next" onclick="pripocitaj(1)">&#10095;</a>
    <div class="caption-container">
        <p id="caption"></p>
    </div>
</div>
<div style="padding-left: 5%; padding-right: 5%; justify-content: space-between">
<div class="container">
    <div class="ohranicenie">
    <h1 class="joing">Want to join the Stratford family?</h1>
        <a href="Contak.php" class="tlacidlo">GET IN TOUCH!</a>

    </div>
    <div class="pouzivatel">
        <ul>
            <li><img src="obrazky/blog/ikonky/user-fill.png" alt="png"> <p>Jeffikus</p></li>
            <li><img src="obrazky/blog/ikonky/time-fill.png" alt="png"> <p>August 15, 2019</p></li>
            <li><img src="obrazky/blog/ikonky/folder-fill.png" alt="png"> <p>Events</p></li>
            <li><img src="obrazky/blog/ikonky/price-tag-3-fill.png" alt="png"> <p>Fun day</p></li>
        </ul>
    </div>

</div>
</div>
<?php

    include 'adminlog/pomocna.php';
    $novy->zostrojenie();
$_SESSION['update'] = false;
    include "zaklad/schema.php";

    ?>


<div style="padding-left: 5%; padding-right: 5%; justify-content: space-between">
<div class="container">
<div class="text-mis">
    <h1>Mission Statement</h1>
    <p>Ever since Stratford first opened its doors, our mission has been to provide the absolute best learning
        environment, coupled with educators who care and who are amongst the most highlight qualified in their field!
        <br><br>
        It makes sense for us to formalise and codify what we believe into 2 distinct descriptions;</p>
</div>
    <div class="blok-blok">
        <p>We are Stratford, a place of educational excellence.</p>
    </div>
    <div class="blok-blok">
        <p>We equip your children for their chosen field of study and careers with lifelong learning skills.</p>
    </div>
    <div class="ohranicenie">
        <h1 class="joing">Want to join the Stratford family?</h1>
        <a href="Contak.php" class="tlacidlo">GET IN TOUCH!</a>
    </div>
</div>
</div>
    <div class="<?php

    if($_SESSION['prihlasenie'] == true) {
        echo "novy";
    }  else {
        echo "neprihlaseny";
    }

    ?>">

        <a class="addbutton" onclick="spustenie()">Add blog</a></div>

<?php
include "zaklad/footer.php";
?>
</body>
<script src="js/blog.js"></script>
</html>

<div id="hlavicka" class="hlavicka">
    <a class="nadpis" href="stranka.php">Stratford</a>
    <div class="ikony">
        <ul class="topnav" id="myTopnav">

            <li class="idk" id="stranka">
                <a class="znacka"  style=""  href="stranka.php">Home</a>
            </li>
            <li id="about"  class="idk">
                <a class="znacka" href="about.php" >About</a>
                <img src="obrazky/icons8-triangle-arrow-24.png" alt="png" height="13px" width="13px">
                <div id="boxik" class="dropdown-content">
                    <a class="idk" id="ourstaff"  href="ourstaff.php">- Our Staff</a>
                    <a class="idk" id="whatweoffer" href="whatweoffer.php">- What We Offer</a>
                </div>
            </li>
            <li class="idk" id="blog">
                <a  class="znacka"   href="blog.php">Blog</a>
            </li>
            <li class="idk" id="Contak">
                <a class="znacka"  style="" href="Contak.php">Contact</a>
            </li>


            <li class="ida"> <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    MENU +
                </a> </li>
        </ul>

    </div>

</div>
<div class="stay">
<div class="<?php session_start();
if($_SESSION['prihlasenie'] == true) {
    echo "loginfo";
}  else {
    echo "neprihlaseny";
} ?>">
    <?php
    if ($_SESSION['prihlasenie'] == true) {
        include('adminlog/session.php');
    }
    ?>
    <div><img class="upravy" src="obrazky/avatar20.png" alt="obrazok"><br> <p class="adminsedou">Admin</p></div>
    <p class="nadc"><?php echo $login_session; ?></p>
    <a class="linka" href="Nastavenie.php">Nastavenie </a>
    <a class="linka" href="adminlog/logout.php">Odhlasenie</a>
</div>
</div>
<script src="js/hlavicka.js"></script>
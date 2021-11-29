var slides = document.getElementsByClassName("mojslaid");
function Otvorit()
{
    document.getElementById("mojmodal").style.display = "block";
}
function zaviert()
{
    document.getElementById("mojmodal").style.display = "none";
}
var stranovyindex =1;
ukazslaid(stranovyindex);
function pripocitaj(n) {
    slides[stranovyindex-1].style.transform ="translateX(200px)";
    slides[stranovyindex-1].style.transform ="translateX(-200px)";
    slides[stranovyindex-1].style.transform ="translateX(0px)";
    ukazslaid(stranovyindex +=n);

}
function vyslednyslaid(n) {
    ukazslaid(stranovyindex = n)
}

function ukazslaid(n) {
    var i;
    var titulok = document.getElementById("caption");
    var dotitulku = document.getElementsByClassName("demo")

    if (n > slides.length) {
         stranovyindex = 1
    }
    if (n < 1) {
        stranovyindex = slides.length
    }
    for (i = 0; i < slides.length; i++) {

        slides[i].style.display = "none";
    }

    slides[stranovyindex-1].style.display = "block";

    titulok.innerHTML =  dotitulku[stranovyindex-1].alt;
}

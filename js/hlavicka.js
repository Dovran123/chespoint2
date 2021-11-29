
function myFunction() {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById("hlavicka");
    var z = document.getElementById("boxik");
    if (x.className === "topnav") {
    x.className += " responsive";
} else {
    x.className = "topnav";
}
    if (y.className === "hlavicka") {
    y.className += " hlavna";
} else {
    y.className = "hlavicka";
}
    if (z.className === "dropdown-content") {
        z.className += " hamburger";
    } else {
        z.className = "dropdown-content";
    }
}
const pageUrl = window.location.href;

let pageName = pageUrl.split('.')[0].split('/');
pageName = pageName[pageName.length - 1]
console.log(pageUrl);
console.log(pageName);
let element = document.getElementById(pageName);
console.log(element)
element.classList.add("active");


// var aktivna = document.getElementsByClassName("idk");
// for (var i = 0; i < aktivna.length; i++) {
//     aktivna[i].addEventListener("click", function () {
//         var current = document.getElementsByClassName("active");
//         if (current.length > 0) {
//             current[0].className = current[0].className.replace(" active", "");
//         }
//         this.className += " active";
//     });
// }



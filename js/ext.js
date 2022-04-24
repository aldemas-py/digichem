// footer
function footerAlign() {
    var footerHeight = $(".footer").outerHeight();
    $("body").css("padding-bottom", footerHeight);
}
$(document).ready(function () {
    // body
    obj = $("#homeImage");
    pgheight = $(window).height();
    obj.height = obj.css("height", pgheight * 0.7);
    // footer
    footerAlign();
    // $(".footer").html(htmlString);
});
$(window).resize(function () {
    footerAlign();
});
// Navbar
const nav = document.querySelector(".navbar");
fetch("header/navbar.html")
    .then((res) => res.text())
    .then((data) => {
        nav.innerHTML = data;
    });

function myFunction() {
    var x = document.getElementById("myNavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}
// footer
const foot = document.querySelector(".footer");
fetch("header/footer.html")
    .then((res) => res.text())
    .then((data) => {
        foot.innerHTML = data;
    });
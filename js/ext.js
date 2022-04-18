// Navbar
const nav = document.querySelector(".navbar");
fetch("header/navbar.html")
    .then((res) => res.text())
    .then((data) => {
        nav.innerHTML = data;
    });

// footer

const foot = document.querySelector(".footer");
fetch("header/footer.html")
    .then((res) => res.text())
    .then((data) => {
        foot.innerHTML = data;
    });

function footerAlign() {
    var footerHeight = $(".footer").outerHeight();
    $("body").css("padding-bottom", footerHeight);
}

$(document).ready(function () {
    footerAlign();
    $(".footer").html(htmlString);
});

$(window).resize(function () {
    footerAlign();
});
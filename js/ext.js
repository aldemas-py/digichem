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
    $(window).resize(function () {
        footerAlign();
    });
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
document.addEventListener("DOMContentLoaded", function (event) {
    var element = document.getElementById('body');
    var height = element.offsetHeight;
    if (height < screen.height) {
        document.getElementById("footer").classList.add('stikybottom');
    }
}, false);

// contact page
$(':submit').click(function () {
    $(this).attr('value', 'Please wait...');
})

function validateForm() {
    var name = document.getElementById('user').value;
    if (name == "") {
        document.querySelector('.status').innerHTML = "Name cannot be empty";
        return false;
    }
    var email = document.getElementById('email').value;
    if (email == "") {
        document.querySelector('.status').innerHTML = "Email cannot be empty";
        return false;
    } else {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(email)) {
            document.querySelector('.status').innerHTML = "Email format invalid";
            return false;
        }
    }
    var subject = document.getElementById('subject').value;
    if (subject == "") {
        document.querySelector('.status').innerHTML = "Subject cannot be empty";
        return false;
    }
    var message = document.getElementById('message').value;
    if (message == "") {
        document.querySelector('.status').innerHTML = "Message cannot be empty";
        return false;
    }
    document.querySelector('.status').innerHTML = "Sending...";
}
<?php
    include "database/err.handle.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    // submit form

    // document.getElementById('status').innerHTML = "Sending...";
    formData = {
        'username': $('input[name=username]').val(),
        'password': $('input[name=password]').val()
    };

    $.ajax({
        url: "database/process.php",
        type: "POST",
        data: formData,
        success: function(data, textStatus, jqXHR) {

            $('#status').text(data.message);
            if (data.code) //If login was successful, reset the form.
                $('#loginForm').closest('form').find("input[type=text], input[type=password]")
                .val("");
            $('#loginForm').closest('form').find("input[type=submit]")
                .val("Submit");
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#status').text(jqXHR);
        }
    });
    </script>
    <style>
    body {
        background-image: url('images/bg1.jpg');
        background-position: center;
        background-size: cover;
        position: relative;
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.61);
        backdrop-filter: blur(100px);
    }
    </style>
</head>

<body">
    <div class="body" id="body">
        <div class="login">
            <nav class="navbar" id="myNavbar"> </nav>
            <div class="content">
                <form action="database/process.php" method="post" id="loginForm" name="loginForm"
                    onsubmit="return validateMyForm()">
                    <div id="myform">

                        <input type="textbox" placeholder="User name" name="username" id="username" />
                        <br>

                        <input type="password" placeholder="password" name="password" id="password" />
                        <br>

                        <input type="submit" name="submit" id="submit" />
                        <div id="status"></div>
                    </div>
                </form>
                <div class="footer" id="footer"></div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src='js/ext.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

</html>
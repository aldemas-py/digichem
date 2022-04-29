<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        // submit contact page

        document.getElementById('status').innerHTML = "Sending...";
        formData = {
            'name': $('input[name=user]').val(),
            'email': $('input[name=email]').val(),
            'subject': $('input[name=subject]').val(),
            'message': $('textarea[name=message]').val()
        };


        $.ajax({
            url: "contact.clicked.php",
            type: "POST",
            data: formData,
            success: function(data, textStatus, jqXHR) {

                $('#status').text(data.message);
                if (data.code) //If mail was sent successfully, reset the form.
                    $('#contact-form').closest('form').find("input[type=text], input[type=email], textarea")
                    .val("");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#status').text(jqXHR);
            }
        });
    </script>
    <style>
        body {
            background-image: url('images/contact.jpg');
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
        <div class="contact">
            <nav class="navbar" id="myNavbar"> </nav>
            <div class="content">
                <form action="contact.clicked.php" method="post" id="contact-form" name="contact-form" onsubmit="return validateForm()">
                    <input type="text" id="user" name="user" placeholder="Name"><br>
                    <input type="email" name="email" id="email" placeholder="Email"><br>
                    <input type="text" id="subject" name="subject" placeholder="Subject"><br>
                    <textarea placeholder="Message here" id="message" name="message"></textarea><br>
                    <div class="status" id="status"></div>
                    <input type="submit" value="Submit" id="submit" class="submit" onclick="validateForm();">
            </div>
            <div class="footer" id="footer"></div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src='js/ext.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

</html>
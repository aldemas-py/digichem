<?php
require 'core.inc.php';

session_start();

if (isset($_SESSION['user_id']) != "") {
    header("Location: ../dashboard.php");
}
if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($mysqli, $_POST['username']);
    if (!($user)) {
        $_SESSION['user_err_name'] = "err";
        header("Location: ../login.php");
    }
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    if (!($password)) {
    }
    $_SESSION['user_err_pass'] = "err";
    header("Location: ../login.php");

    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE username = '" . $user . "' and password = '" . $password . "'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['uid'];
            $_SESSION['user_name'] = $row['username'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_mobile'] = $row['mobile'];
            header("Location: ../dashboard.php");
        } else {
            $_SESSION['user_login'] = "err";
            header("Location: ../login.php");
        }
    } else {
        $error_message = "Incorrect Email or Password!!!";
    }
}

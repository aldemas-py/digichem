<?php
require_once 'core.inc.php';

// login form
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
        $_SESSION['user_err_pass'] = "err";
        header("Location: ../login.php");
    }
    $password = md5($password);
    $result1 = mysqli_query($mysqli, "SELECT * FROM useraccounts WHERE username = '" . $user . "' and pass = '" . $password . "'");
    if (!empty($result1)) {
        if ($row = mysqli_fetch_array($result1)) {
            $userid = $_SESSION['user_id'] = $row['employeeId'];
            $_SESSION['user_name'] = $row['username'];
            $result2 = mysqli_query($mysqli, "SELECT * FROM employees WHERE id = '" . $userid . "'");
            if (!empty($result2)) {
                if ($row = mysqli_fetch_array($result2)) {
                    $_SESSION['user_email'] = $row['email'];
                    $_SESSION['user_mobile'] = $row['phone'];
                    echo "sucessc";
                    header("Location: ../dashboard.php");
                } else {
                    echo "error getting data from employees table";
                }
            } else {
                echo "Error2: " . " " . mysqli_error($mysqli);
            }
        } else {
            echo "error getting data from user table";
        }
    } else {
        echo "Error1: " . " " . mysqli_error($mysqli);
    }
} else {
    $_SESSION['user_login'] = "err";
    header("Location: ../login.php");
}
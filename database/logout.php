<?php
ob_start();
session_start();
if (isset($_SESSION['user_id'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_mobile']);
    unset($_SESSION['user_logi']);
    unset($_SESSION['user_err_name']);
    unset($_SESSION['user_err_pass']);
    header("Location: ../login.php");
} else {
    header("Location: ../dashboard.php");
}

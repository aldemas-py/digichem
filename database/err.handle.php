<?php
clearstatcache();
session_start();
if ((isset($_SESSION['user_err_name'])) && (isset($_SESSION['user_err_pass'])) == "err") {
    echo '<script type="text/JavaScript">
            alert("Missing username or password");
    </script>';
    unset($_SESSION['user_err_name']);
    unset($_SESSION['user_login']);
    unset($_SESSION['user_err_pass']);
}
if (isset($_SESSION['user_login']) == "err") {
    echo '<script type="text/JavaScript">
            alert("invalid username or password");
    </script>';
    unset($_SESSION['user_logi']);
    unset($_SESSION['user_err_name']);
    unset($_SESSION['user_err_pass']);
}

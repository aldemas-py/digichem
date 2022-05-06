<?php
// createAccount
// session_start();
// if (!isset($_SESSION["username"])) {
//     header("Location: \..\login.php");
//     exit();
// }
require 'core.inc.php';
if (isset($_POST['submit'])) {
    $surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
    $otherName = mysqli_real_escape_string($mysqli, $_POST['otherNames']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $securityKey = md5($surname);
    $idNumber = mysqli_real_escape_string($mysqli, $_POST['idNumber']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phoneNumber']);
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $cpassword = mysqli_real_escape_string($mysqli, $_POST['password_hash']);
    $employeeIdObj = mysqli_fetch_object(mysqli_query($mysqli, "SELECT id FROM employees WHERE surname = '" . $surname . "'"));
    $employeeId = $employeeIdObj->id;
    $securityLevel = mysqli_real_escape_string($mysqli, $_POST['UserLevel']);
    $employeestatus = mysqli_real_escape_string($mysqli, 1);

    if (!preg_match("/^[a-zA-Z ]+$/", $username)) {
        $name_error = "Name must contain only alphabets and space";
    }
    if (!preg_match("/^[a-zA-Z ]+$/", $surname)) {
        $name_error = "Name must contain only alphabets and space";
    }
    if (!preg_match("/^[a-zA-Z ]+$/", $otherName)) {
        $name_error = "Name must contain only alphabets and space";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
    }
    if (strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
    }
    if (strlen($phone) < 12) {
        $mobile_error = "Mobile number must be minimum of 12 characters";
    }
    if ($password != $cpassword) {
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if ((mysqli_query($mysqli, "INSERT INTO employees(surname, otherNames, email,securityKey, idNumber, phone) VALUES('" . $surname . "', '" . $otherName . "','" . $email . "', '" . $securityKey . "', '" . $idNumber . "', '" . $phone . "')"))) {
        if ((mysqli_query($mysqli, "INSERT INTO useraccounts(username, password, employeeId, securityLevel, active) VALUES('" . $username . "', '" . md5($password) . "',, '" . $employeeId . "' '" . $securityLevel . "', '" . $employeestatus . "')"))) {
            $to = $_POST['email'];
            $from = 'Njengasam2406@gmail.com';
            $message = 'Thank you for creating an account with us ' . $surname . ' ' . $otherName;

            // send email
            mail($to, "My subject", $message);
            header("location: createacc.php");
            exit();
        }
    } else {
        echo "Error: " . " " . mysqli_error($mysqli);
    }

    mysqli_close($mysqli);
}

if (isset($_POST["indexPage"])) {
    ob_start();
    session_start();

    header("Location:\.\index.php");
    session_destroy();;
}

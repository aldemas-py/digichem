<?php
// createAccount
// session_start();
// if (!isset($_SESSION["username"])) {
//     header("Location: \..\login.php");
//     exit();
// }
require_once 'core.inc.php';
if (isset($_POST['submit'])) {
    $surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
    $otherName = mysqli_real_escape_string($mysqli, $_POST['otherNames']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $securityKey = md5($surname);
    $idNumber = mysqli_real_escape_string($mysqli, $_POST['idNumber']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phoneNumber']);
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = md5(mysqli_real_escape_string($mysqli, $_POST['password']));
    $cpassword = md5(mysqli_real_escape_string($mysqli, $_POST['password_hash']));
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
    $userIdNumberObj = mysqli_fetch_object(mysqli_query($mysqli, "SELECT * FROM employees WHERE idNumber = '" . $idNumber . "'"));
    $userIdNumber = $userIdNumberObj->idNumber;
    if ($userIdNumber != $idNumber) {
        $queryInsert1 = mysqli_query($mysqli, "INSERT INTO employees(surname, otherNames, email,securityKey, idNumber, phone) VALUES('" . $surname . "', '" . $otherName . "','" . $email . "', '" . $securityKey . "', '" . $idNumber . "', '" . $phone . "')");

        if ($queryInsert1) {
            $employeeIdObj = mysqli_fetch_object(mysqli_query($mysqli, "SELECT id FROM employees WHERE surname = '" . $surname . "'"));
            $employeeId = $employeeIdObj->id;

            if (!empty($employeeId)) {
                $queryInsert2 = mysqli_query($mysqli, "INSERT INTO useraccounts(username, pass, employeeId, SecurityLevel, active) VALUES('" . $username . "', '" . $password . "', '" . $employeeId . "', '" . $securityLevel . "', '" . $employeestatus . "')");
                if ($queryInsert2) {
                    $to = $_POST['email'];
                    $from = 'Njengasam2406@gmail.com';
                    $message = 'Thank you for creating an account with us ' . $surname . ' ' . $otherName;

                    // send email
                    mail($to, "My subject", $message);
                    header("Location: ../dashboard.php");
                    exit();
                }
            }
        }
        mysqli_close($mysqli);
    } else {
        header("Location: ../dashboard.php");
        echo '<script type="text/JavaScript">alert("User already exists");</script>';
    }
}
if (isset($_POST["indexPage"])) {
    ob_start();
    session_start();

    header("Location:\.\index.php");
    session_destroy();;
}
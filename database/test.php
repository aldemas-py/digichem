<?php

require_once 'core.inc.php';

$username = "this";
$password = md5("that");
$cpassword = "sam";
$employeeIdObj = mysqli_fetch_object(mysqli_query($mysqli, "SELECT id FROM employees WHERE surname = '" . "sam" . "'"));
$employeeId = $employeeIdObj->id;
$employeeId = 14;
echo $employeeId;
$employeestatus = 1;
$securityLevel = 1;


$queryInsert2 = mysqli_query($mysqli, "INSERT INTO useraccounts(username, pass, employeeId, SecurityLevel, active) VALUES('" . $username . "', '" . $password . "', '" . $employeeId . "', '" . $securityLevel . "', '" . $employeestatus . "')");
if ($queryInsert2) {
    echo "succsess";
} else {
    echo "Error: " . " " . mysqli_error($mysqli);
}
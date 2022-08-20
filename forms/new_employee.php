<?php
clearstatcache();
// $current_file = $_SERVER['PHP_SELF'];
// include_once("../database/core.inc.php");

// if(isset($_POST['add'])){
//   echo "here";
//     //prepare a query
//     $query = "INSERT INTO Employee (surname, othername, phone1, phone2, national_id, dob, date_employed, employee_level, employeestatus, password, branch) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

//     echo "here 1";
//     if($prepair = $mysqli->prepare($query)){
//         echo "here 2";
//         $bind = $prepair->bind_param("sssssssssss", $surname, $othernames, $phone1, $phone2, $idnumber, $dob, $doe, $security, $status, $password, $branch);

//         echo "here 2";
//         $surname = $_POST['surname'];
//         $othernames = $_POST['othernames'];
//         $phone1 = $_POST['phone1'];
//         $phone2 = $_POST['phone2'];
//         $idnumber = $_POST['idnumber'];
//         $dob = $_POST['dob'];
//         $security = $_POST['security'];
//         $doe = $_POST['doe'];
//         $status = $_POST['status'];
//         $password = md5($surname);
//         $branch = $_POST['branch'];

//         echo "here 4";
//         if($prepair->execute()){
//         echo"success";
//         }
//          // Close query
//         $prepair->close();

//     } else{
//         echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
//     }

//     // Close connection
//     $mysqli->close();
// }

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include_once("../nav/nav.php") ?>
    <link rel="stylesheet" type="text/css" href="css.css" media="all" />
</head>

<body id="emp">
    <div class="flex-container">
        <form action="<?php $current_file; ?>" method="POST">
            <div class="container">
                <ol>
                    <li>
                        <lable id="lable" class="lable"> NEW EMPLOYEE </lable>
                    </li>
                </ol>
            </div>
            <?php require_once('table_head.php') ?>
            <div class="container">
                <ol>
                    <li><span class="lable"> Sur Name</span></li>
                    <li><input type="text" name="surname" id="surname"></li>
                </ol>
                <ol>
                    <li><span class="lable"> Other Names</span></li>
                    <li><input type="text" name="othernames" id="othernames"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Phone Number</span></li>
                    <li><input type="number" name="phone1" id="phone1"></li>
                </ol>
                <ol>
                    <li><span class="lable"> other Number</span></li>
                    <li><input type="text" name="phone2" id="phone2"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Id Number</span></li>
                    <li><input type="text" name="idnumber" id="idnumber"></li>
                </ol>
                <ol>
                    <li><span class="lable"> D.O.B</span></li>
                    <li><input type="date" name="dob" id="dob"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Date employed</span></li>
                    <li><input type="date" name="doe" id="doe"></li>
                </ol>
                <ol>
                    <li><span class="lable"> Employee status</span></li>
                    <li><select class="status" name="status" id="status">
                            <option value="select">Select...</option>
                            <option value="1">Active</option>
                            <option value="2">Terminated</option>
                            <option value="3">On Leave</option>
                            <option value="2">Intern</option>
                        </select></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Security level</span></li>
                    <li><select class="security" name="security" id="security">
                            <option value="select">Select...</option>
                            <option value="1">CEO</option>
                            <option value="2">Admin</option>
                            <option value="3">User</option>
                            <option value="4">.</option>
                        </select></li>
                </ol>
                <ol>
                    <li><span class="lable"> Branch</span></li>
                    <li><select class="branch" name="branch" id="branch">
                            <option value="select">Select...</option> <?php
                                                                        $query1 = "SELECT * FROM branch;";
                                                                        $result = mysqli_query($mysqli, $query1);
                                                                        if ($result) {
                                                                            while ($rows = mysqli_fetch_array($result)) {
                                                                                $branchName = $rows["branchname"];
                                                                                echo "<option>$branchName<br></option>";
                                                                            }
                                                                        }
                                                                        ?>
                        </select></li>
                </ol>
            </div>
        </form>
    </div>
    <?php "</div>" ?>
</body>

</html>
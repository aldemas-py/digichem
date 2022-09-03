<?php
clearstatcache();
$current_file = $_SERVER['PHP_SELF'];
try {
    //code...
    include_once("../database/core.inc.php");
} catch (\Throwable $th) {
    //throw $th;
}

if (isset($_POST['add'])) {
    echo "here";
    //prepare a query
    $query = "INSERT INTO customers (patientname, dob, phone, weights, addresss) VALUES(?, ?, ?, ?, ?)";

    echo "here 1";
    if ($prepair = $mysqli->prepare($query)) {
        echo "here 2";
        $bind = $prepair->bind_param("sssss", $patientname, $yob, $phone_no, $weight, $address);

        echo "here 3";
        $patientname = $_POST['patientname'];
        $yob = $_POST['yob'];
        $phone_no = $_POST['phone_no'];
        $weight = $_POST['emContact'];
        $address = $_POST['address'];

        echo "here 4";
        if ($prepair->execute()) {
            echo "success";
        }
        // Close query
        $prepair->close();
    } else {
        echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
    }

    // Close connection
    $mysqli->close();
}


?>

<html>

<head>
    <?php include_once("../nav/nav.php") ?>
    <link rel="stylesheet" type="text/css" href="css.css" media="all" />
</head>

<body id="brch">
    <div class="flex-container">
        <form action="<?php $current_file; ?>" method="POST">
            <div class="container">
                <ol>
                    <li>
                        <lable id="lable" class="lable">NEW PATIENT</lable>
                    </li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Name</span></li>
                    <li><input type="text" name="patientname" id="patientname"></li>
                </ol>
                <ol>
                    <li><span class="lable"> Y.O.B</span></li>
                    <li><input type="text" name="yob" id="yob"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Phone Number</span></li>
                    <li><input type="text" name="phone_no" id="phone_no"></li>
                </ol>
                <ol>
                    <li><span class="lable">Address</span></li>
                    <li><input type="text" name="address" id="address"></li>
                </ol>
                <ol>
                    <li><span class="lable">Em Contact</span></li>
                    <li><input type="text" name="emContact" id="emContact"></li>
                </ol>
            </div>
            <?php require_once('table_head.php') ?>
        </form>
    </div>
    <?php "</div>" ?>
</body>

</html>
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
    $query = "INSERT INTO suppliers (surname, othername, companyname, phone_no, email, item) VALUES(?, ?, ?, ?, ?, ?)";

    echo "here 1";
    if ($prepair = $mysqli->prepare($query)) {
        echo "here 2";
        $bind = $prepair->bind_param("ssssss", $surname, $othername, $company, $phone, $email, $item);

        echo "here 2";
        $surname = $_POST['surname'];
        $othername = $_POST['othername'];
        $company = $_POST['company'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $item = $_POST['item'];

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

<body id="spr">
    <div class="flex-container">
        <form action="<?php $current_file; ?>" method="POST">
            <div class="container">
                <ol>
                    <li colspan="4">
                        <lable id="lable" class="lable">NEW SUPPLIER</lable>
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
                    <li><input type="text" name="othername" id="othername"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Company Name</span></li>
                    <li><input type="text" name="company" id="company"></li>
                </ol>
                <ol>
                    <li><span class="lable"> Phone Number</span></li>
                    <li><input type="text" name="phone" id="phone"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Email</span></li>
                    <li><input type="email" name="email" id="email"></li>
                </ol>
                <ol>
                    <li><span class="lable"> <a href="new_drug.php" data-toogle="tooltip" title="Add new item here">
                                Item<a></span></li>
                    <li><input type="text" name="item" id="item"></li>
                </ol>
            </div>
        </form>
    </div>
    <?php "</div>" ?>
</body>

</html>
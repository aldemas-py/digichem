<?php
// clearstatcache();
// include_once("../database/core.inc.php");
$current_file = $_SERVER['SCRIPT_FILE'];

// if (isset($_POST['add'])) {
//     echo "here";
//     //prepare a query
//     $query = "INSERT INTO `drugs&itetems` (name, description, aisle, stock, classification, branch) VALUES(?, ?, ?, ?, ?, ?)";
//     echo "here 1";
//     if ($prepair = $mysqli->prepare($query)) {
//         echo "here 2";
//         $bind = $prepair->bind_param("ssssss", $name, $description, $aisle, $stock, $classification, $branch);
//         echo "here 2";
//         $name = $_POST['name'];
//         $description = $_POST['description'];
//         $aisle = $_POST['aisle'];
//         $stock = $_POST['stock'];
//         $classification = $_POST['classification'];
//         $branch = $_POST['branch'];
//         echo "here 4";
//         if ($prepair->execute()) {
//             echo "success";
//         }
//         // Close query
//         $prepair->close();
//     } else {
//         echo "ERROR: Coold not prepare query: $sql. " . $mysqli->error;
//     }

// Close connection
//     $mysqli->close();
// }

?>

<html>

<head>
    <?php include_once("../nav/nav.php") ?>
    <link rel="stylesheet" type="text/css" href="css.css" />
</head>

<body>
    <div class="flex-container">
        <form action="<?php $current_file; ?>" method="POST">
            <div class="container">
                <ol>
                    <li class="header">
                        <lable id="lable">Add New Item</lable>
                    </li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li>Brand Name</li>
                    <li><input type="text" name="name" id="name"></li>
                </ol>
                <ol>
                    <li>Description</li>
                    <li><input type="text" name="description" id="description"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li>Aisle</li>
                    <li><input type="text" name="aisle" id="aisle"></li>
                </ol>
                <ol>
                    <li>Drug Count</li>
                    <li><input type="text" name="stock" id="stock"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><a href="new_branch.php" id="branchbtn" data-toogle="tooltip" title="Add new branch here">Branch
                        </a></li>
                    <li><input type="text" name="branch" id="branch"></li>
                </ol>
                <ol>
                    <li><a href="new_classification.php" id="classificationbtn" data-toogle="tooltip"
                            title="Add new classification here">Classification</a></li>
                    <li><input type="text" name="classification" id="classification"></li>
                </ol>
            </div>
            <?php require_once('table_head.php') ?>
        </form>
    </div>
</body>

</html>
</html>
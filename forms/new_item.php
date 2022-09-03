<?php
clearstatcache();
// include_once("../database/core.inc.php");
$current_file = $_SERVER['PHP_SELF'];

if (isset($_POST['add'])) {
    echo "here";
    //prepare a query
    $query = "INSERT INTO `drugs&itetems` (name, description, aisle, stock, classification, branch) VALUES(?, ?, ?, ?, ?, ?)";
    echo "here 1";
    if ($prepair = $mysqli->prepare($query)) {
        echo "here 2";
        $bind = $prepair->bind_param("ssssss", $name, $description, $aisle, $stock, $classification, $branch);
        echo "here 2";
        $name = $_POST['name'];
        $description = $_POST['description'];
        $aisle = $_POST['aisle'];
        $stock = $_POST['stock'];
        $classification = $_POST['classification'];
        $branch = $_POST['branch'];
        echo "here 4";
        if ($prepair->execute()) {
            echo "success";
        }
        // Close query
        $prepair->close();
    } else {
        echo "ERROR: Coold not prepare query: $sql. " . $mysqli->error;
    }

    // Close connection
    $mysqli->close();
}

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
                        <lable class="lable" id="lable">NEW ITEM</lable>
                    </li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Name</span></li>
                    <li><input type="text" name="name" id="name"></li>
                </ol>
                <ol>
                    <li><span class="lable">Description</span></li>
                    <li><input type="text" name="description" id="description"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable">Aisle</span></li>
                    <li><input type="text" name="aisle" id="aisle"></li>
                </ol>
                <ol>
                    <li><span class="lable">Drug Count </span></li>
                    <li><input type="text" name="stock" id="stock"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"><a href="new_branch.php" id="branchbtn" data-toogle="tooltip"
                                title="Add new branch here">Branch </a></span></li>
                    <li><input type="text" name="branch" id="branch"></li>
                </ol>
                <ol>
                    <li><span class="lable"><a background="red" href="new_classification.php" id="classificationbtn"
                                data-toogle="tooltip" title="Add new classification here">Classification</a></span></li>
                    <li><input type="text" name="classification" id="classification"></li>
                </ol>
            </div>
            <?php require_once('../forms/table_head.php') ?>
        </form>
    </div>
    <?php "</div>" ?>
</body>

</html>
<?php
clearstatcache();
$current_file = $_SERVER['PHP_SELF'];
// include_once("../database/core.inc.php");


// if(isset($_POST['add'])){

//     //prepare a query
//     $query = "INSERT INTO classification (classification) VALUES ( ?)";

//     if($prepair = $mysqli->prepare($query)){

//         $bind = $prepair->bind_param("s", $classification);

//         $classification = $_POST['classification'];

//         if($prepair->execute()){
//         echo"success";
//         }
//          // Close query
//         $prepair->close();

//     } else{
//         echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
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

<body id="clsf">
    <div class="flex-container">
        <form action="<?php $current_file; ?>" method="POST">
            <div class="container">
                <ol>
                    <li>
                        <lable id="lable" class="lable">Classification</lable>
                    </li>
                </ol>
            </div>
            <div class="container">
                <!-- <ol>
                        <li><span class="lable"> Item_Id</span></li>
                        <li><input type="text" id="itemid"></li>
                    </ol> -->
                <ol>
                    <li><span class="lable"> classification</span></li>
                    <li><input type="text" name="classification" id="classification"></li>
                </ol>
            </div>
            <?php require_once('table_head.php') ?>
        </form>
    </div>
    <?php "</div>" ?>
</body>

</html>
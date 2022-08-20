<?php
include_once(".. /database/core.inc.php");
if (isset($_POST['add'])) {
    echo "here"; //prepare a query
    $query = "INSERT INTO Branch (branchname, branchhead, location, address) VALUES(?, ?, ?, ?)";
    echo "here 1";
    if ($prepair = $mysqli->prepare($query)) {
        echo "here 2";
        $bind = $prepair->bind_param("ssss", $branchname, $branchhead, $location, $address);
        echo "here 3";
        $branchname = $_POST['branchname'];
        $branchhead = $_POST['branchhead'];
        $location = $_POST['location'];
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
}    include_once("../database/core.inc.php");
    $current_file = $_SERVER['SCRIPT_FILE'];
    
    if(isset($_POST['add'])){
      echo "here";
        //prepare a query
        $query = "INSERT INTO `drugs&itetems` (name, description, aisle, stock, classification, branch) VALUES(?, ?, ?, ?, ?, ?)";
        echo "here 1";
        if($prepair = $mysqli->prepare($query)){
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
            if($prepair->execute()){
            echo"success";
            }
             // Close query
            $prepair->close();
            
        } else{
            echo "ERROR: Coold not prepare query: $sql. " . $mysqli->error;
        }

        // Close connection
        $mysqli->close();
    }
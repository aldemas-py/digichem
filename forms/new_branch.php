<?php
clearstatcache();
$current_file = $_SERVER['PHP_SELF'];

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
                        <lable id="lable" class="lable"> New Branch</lable>
                    </li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Branch Name</span></li>
                    <li><input type="text" name="branchname" id="branchname"></li>
                </ol>
                <ol>
                    <li><span class="lable"> Branch Head</span></li>
                    <li><input type="text" name="branchhead" id="branchhead"></li>
                </ol>
            </div>
            <div class="container">
                <ol>
                    <li><span class="lable"> Location</span></li>
                    <li><input type="text" name="location" id="location"></li>
                </ol>
                <ol>
                    <li><span class="lable"> Address</span></li>
                    <li><input type="text" name="address" id="address"></li>
                </ol>
            </div>
            <?php require_once('table_head.php') ?>
        </form>
    </div>
    <?php "</div>" ?>

</body>

</html>
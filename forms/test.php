<?php     clearstatcache();
    include_once '../database/core.inc.php';
?>
<html>
    <head>
        <style type= "text/css" rel= "stylesheet">
            .container div{
                padding:5px;
                border:solid 2px #fff353;
            }
            .container{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }
            .row{
                display: inline;
                flex-direction: row;
            }
            .row .column {
                width: 300px;
                height: 40px;
            }
            @media only screen and (max-width: 640px) {
                /* For phones: */
                body{
                    background-color: lightseagreen;
                }
                .container{
                    width: 100%;
                }

            }
        </style>
    </head>
    <body>

    <?php
        $sql = "SELECT * FROM avalues;";
        $result = mysqli_query($mysqli, $sql);
        $resultCheak = mysqli_num_rows($result);

        if ($resultCheak > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="container">
                    <div class="column" id="column"> 
                        <div class="row" id="row"> '
                            . $row['id'] . 
                        '</div>  
                        <div class="row" id="row"> '
                            . $row['name'] . 
                        '</div>
                    </div>
                </div>';
            }
        }

    ?>

        
    </body>
</html>
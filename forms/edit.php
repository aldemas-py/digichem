<?php
    clearstatcache();


?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Mycss.css" media="all"/>
    </head>
    <body id="drg">
        <div class="conteiner">
        <form action="<?php $current_file;?>" method="POST">
            <div id="tabl" class="tabl">
                <table id="table">
                    <tr>
                        <td colspan="2">Edit Info here</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>item</td>
                        <td colspan="2"><select class="item" name="item" id="item"><option value="select">Select...</option> <option value="1">Drug info</option> <option value="2">Employee info</option> <option value="3">supplier info</option> <option value="4">Branch info</option> <option value="5">classification info</option><option value="2">Password</option></select></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="">Edit</a></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>
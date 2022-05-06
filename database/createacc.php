<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
    <form action="process.create.php" method="post">
        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create new account</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="process.create.php">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="surname" id="surnamr" class="form-control input-sm" placeholder="Surname">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="otherNames" id="otherNames" class="form-control input-sm" placeholder="Other Names">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="ID Number" id="idNumber" name="idNumber" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Phone Number" id="phoneNumber" name="phoneNumber" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password_hash" id="password_hash" class="form-control input-sm" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select name="UserLevel" id="userlevel" class="form-control input-sm">
                                                <option value="3">User Level</option>
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                                <option value="3">guest</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select name="employeestatus" id="employeestatus" class="form-control input-sm">
                                                <option value="0">Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="submit" value="Register" class="btn btn-info btn-block" name="submit">

                                    <div class="wrapper">
                                        <span class="group-btn">
                                            <a href="../login.php" class="btn btn-primary btn-md">
                                                Log_In<i class="fa fa-sign-in"></i>
                                            </a>
                                            <a value="Cancel" class="btn btn-primary btn-md" name="indexPage">
                                                Cancel<i class="fa fa-sign-in"></i>
                                            </a>
                                        </span>

                                    </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
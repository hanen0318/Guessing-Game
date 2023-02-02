<?php
    //This variable will be used in line 103 and signupaction.php file
    $message ="";
    // Include the file signupaction.php
    include("registrationAction.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <style>
            #div {
                width: 30%;
                text-align: center;
            }
        </style>
    </head>
    <!---- The form body ---->
    <body>
        <div id='div' class="container">
            <h3>Sign Up
                 <!---- Bootstrap library and other library ---->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            </h3>
            <form id = "form1" method = "post" action= "" >
                <div class="form-group">
                    <label>User Name</label>
                    <input type='text' class="form-control" name="username" maxlength='50' required='required' placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type='password' class="form-control" name='password' maxlength='50' required='required' placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type='password' class="form-control" name='confirmPW' maxlength='50' required='required' placeholder="Confirm password">
                </div>
                <!--This span tag is used to display message-->
                <span class="mess"><?php echo $message; echo "<br>"?></span>
                <input id='inputsubmit' type='submit' class="btn btn-outline-primary" name='create' value='CREATE'>
                <button id='inputsubmit' type="button" class="btn btn-outline-primary" onclick="window.location.href='login.php'">SIGN IN</button>
            </form>
        </div>
     <br>
    </body>
</html>




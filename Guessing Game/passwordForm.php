<!DOCTYPE html>
<html>
    <head>
        <title>Password Modification Form</title>
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
            <h3>Password Modification
                 <!---- Bootstrap library and other library ---->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            </h3>
            <form method='post' action='passwordForm.php'>
                <div class="form-group">
                    <label>Existing Username</label>
                    <input type='text' class="form-control" name='exist_username' maxlength='50' required='required' placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label>New Password</label>
                    <input type='password' class="form-control" name='new_password' maxlength='50' required='required' placeholder="Enter new password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type='password' class="form-control" name='confirm_password' maxlength='50' required='required' placeholder="Confirm password">
                </div>
                <div>
                    <?php
                        // Include the file passwordmodificationaction.php
                        include("passwordAction.php");
                        // Run the function, that is to modify the password for a specific user and display the corespoding messages
                        PassModificationFormAction();
                    ?>
                </div>
                <br>
                <!---- Button that perform the modify function that is in the Action file ---->
                <input id='inputsubmit' type='submit' class="btn btn-outline-primary" name='modify' value='MODIFY'>
                <!---- Button to return to the login form, Change the name of the address if needed ---->
                <button id='inputsubmit' type="button" class="btn btn-outline-primary" onclick="window.location.href='login.php'">SIGN-IN</button>
            </form>
        </div>
        <br>
    </body>
</html>



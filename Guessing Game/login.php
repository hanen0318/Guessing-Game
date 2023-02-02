<?php
    // Include the file loginaction.php
    $message ="";
    include("loginAction.php");

?>
<!Doctype HTML>
<html lang="en">
    <head>
      <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
            #div {
                width: 30%;
                text-align: center;
            }
        </style>
	    <title>Log In</title>
    </head>
    <!---- The form body ---->
    <body>
        <div id='div' class="container">
            <h3>Log In
               <!---- Bootstrap library and other library ---->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            </h3>
	        <form method="post" action="login.php" >
                <div class="form-group">
                    <lable> User Name : </lable>
		            <input type="text" class="form-control" name="userName" maxlength='50' required="required" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <lable> Password : </lable>
		            <input type="password" class="form-control" name="userPassword" maxlength='50' required="required" placeholder="Enter password">
                </div>	
                <span class="mess"><?php echo $message; echo "<br>"?></span>
                <input id="inputsubmit" type="submit" name="CONNECT" class="btn btn-outline-primary" value="CONNECT">
                <input id='inputsubmit' type='button' class="btn btn-outline-primary" onclick="window.location.href='registration.php'" value ="SIGN UP">
	        </form>
        </div>
        <br>
    </body>
</html>
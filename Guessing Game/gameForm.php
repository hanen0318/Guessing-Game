<?php
    // Include the file gameaction.php
    $message ="";
    include("game.php");
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Kids Guessing Game</title>
    <style>
            #div {
                width: 30%;
                text-align: center;
            }
        </style>
	</head>
	<body>
        <div id='div' class="container">
            <h1>Kids Guessing Game</h1>
            <h2>Welcome!
            <!---- Bootstrap library and other library ---->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            </h2>
            <p>The system will generate 5 random numbers soon <br>Select 5 different numbers beetween 0 to 12 to guess them</P>
            <form method="post" action="gameForm.php">
                <?php
                    for($i=0; $i<5; ++$i){
                        echo <<<END
                        <select name ="guessNums[]" >
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        END;
                    }
                ?>
                <br><br>
                <span class="mess"><?php echo $message; echo "<br>"?></span>	
                <input id='inputsubmit' type='submit' class="btn btn-outline-primary" name='submit' value='SUBMIT'>
                <input id='inputsubmit' type='button' class="btn btn-outline-primary" onclick="window.location.href='login.php'" value ="SIGN OUT"/>
                <input id='inputsubmit' type='button' class="btn btn-outline-primary" name='modify' value='MODIFY PASSWORD' onclick="window.location.href='passwordForm.php'">
            </form>
        </div>
		<br/>
	</body>
</html>


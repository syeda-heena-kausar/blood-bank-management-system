<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html lang="en">
<?php $title="Bloodbank | home page"; ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>| Welcome to BBMS |</title>
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="shortcut icon" type="image/png" href="image/logo.png" />
        <style type="text/css">
            body {
                width: 100%;
                background: url(image/blood.jpg) ;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
    </head>
    <body>
		
        <center><br><br><br><br><br><br><br><br>
		    <h2> blood bank management system </h2>
            <div class="intro"><br><br><br><br><br><br><br>
			<a href="login.php" class="btn"> login </a> &emsp;
            <a href="register.php" class="btn"> register </a><br><br>
			<a href="abs.php" class="btn"> Available blood samples </a><br><br>
                <h2> Good &nbsp;Luck. </h2>
            </div>
        </center>
		
    </body>
</html>
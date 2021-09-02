<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>register |Hospital  Registration Form</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
	</head>
	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						<center> <h5 style="font-family: Noto Sans;">Register to  </h5><h4 style="font-family: Noto Sans;">HOSPITAL</h4></center><br>
					    <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
						<input type="text" name="hname" placeholder="Hospital Name" class="form-control mb-3" required>
						<input type="text" name="hcity" placeholder="Hospital City" class="form-control mb-3" required>
						<input type="tel" name="hphone" placeholder="Hospital Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
						<input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-3" required>
						<input type="password" name="hpassword" placeholder="Hospital Password" class="form-control mb-3" required minlength="6">
						<input type="submit" name="hregister" value="Register" class="btn btn-primary btn-block mb-4">
                        </form>
						</div>
						<div class="form-group text-center">
							<span class="text-muted">Have an account?</span> <a href="hlogin.php">login</a> Here..
						</div>
						<div class="form-group text-center">
							<span class="text-muted"></span> <a href="INDEX.php">HOME</a> 
						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>
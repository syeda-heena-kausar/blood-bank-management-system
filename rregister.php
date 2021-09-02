<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
	<?php $title="Bloodbank | Register"; ?>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>register | Requester Registration Form</title>
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
						<center> <h5 style="font-family: Noto Sans;">Register to </h5><h4 style="font-family: Noto Sans;">REGISTER</h4></center>
								<form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
									<input type="text" name="rname" placeholder="Receiver Name" class="form-control mb-3" required>
									<select name="rbg" class="form-control mb-3" required>
									<option disabled="" selected="">Blood Group</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
									</select>
									<input type="text" name="rcity" placeholder="Receiver City" class="form-control mb-3" required>
									<input type="tel" name="rphone" placeholder="Receiver Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
									<input type="email" name="remail" placeholder="Receiver Email" class="form-control mb-3" required>
									<input type="password" name="rpassword" placeholder="Receiver Password" class="form-control mb-3" required minlength="6">
									<input type="submit" name="rregister" value="Register" class="btn btn-primary btn-block mb-4">
								</form>
								<div class="form-group text-center">
									<br><span class="text-muted">have an account?</span> <a href="rlogin.php">login</a> Here..
								</div>
								<div class="form-group text-center">
									<span class="text-muted"></span> <a href="index.php">HOME</a> 
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>
<?php } ?>
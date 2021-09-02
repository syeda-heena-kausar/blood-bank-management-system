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
	<?php $title="Bloodbank | Login"; ?>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login | Requester Login Form</title>
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
	   <?php require 'message.php'; ?>
		<section class="login first grey">
			<div class="container">
				<?php require 'message.php'; ?>
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						<center> <h5 style="font-family: Noto Sans;">Login to </h5><h4 style="font-family: Noto Sans;">REQUESTER</h4></center><br>
							<form action="file/receiverLogin.php" method="post">
								<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Email</label>
								<input type="email" name="remail" placeholder="Receiver Email" class="form-control mb-4">
								<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Password</label>
								<input type="password" name="rpassword" placeholder="Receiver Password" class="form-control mb-4">
								<input type="submit" name="rlogin" value="Login" class="btn btn-primary btn-block mb-4">
							</form>
							<div class="form-group text-center">
								<br><span class="text-muted">Don't have an account?</span> <a href="rregister.php">Register</a> Here..
							</div>
							<div class="form-group text-center">
							    <span class="text-muted"></span> <a href="index.php">HOME</a> 
							</div>
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
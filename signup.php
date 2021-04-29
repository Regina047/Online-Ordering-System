<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		
		<title>Sign Up</title>
		<link rel="stylesheet" href="styles/style.css">
		<link rel="stylesheet" href="styles/bootstrap-337.min.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="file:///C:/Users/admin/Downloads/bootstrap-5.0.0-beta3-dist/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">

		<script type="text/javascript" src="file:///C:/Users/admin/Downloads/bootstrap-5.0.0-beta3-dist/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script> -->
	</head>
	
	<body>
		<?php require "header.php"?>
		<div class="account-page">
			<div class="container">
				<div class="row">
					<div class="col-1">
						<img src="img/4.jpg" width="100%">
					</div>
					<div class="col-1">
						<div class="form-container">
							<div class="form-btn">
								<span onclick="login()">Login</span>
								<span onclick="register()">Sign up</span>
								<hr id="Indicator">
									<div>
										<form id="LoginForm">
											<input type="text" placeholder="Username">
											<input type="password" placeholder="Password">
											<button type="submit" class="btn">Login</button>
											<a href=""> Forgot Password</a>
										</form>
										<form action="db_conn.php" id="RegForm">
												<input type="text" placeholder="Name">
											<label for= "birthday"><p>Birthday:</p></label><br>
												<input type="date" id="birthday" id="birthday">
											<label for= "gender">Gender:</label>
												<select name="gender" id="gender">
													<option value="female">Female</option>
													<option value="male">Male</option>
												<input type="text" placeholder="Username">
												<input type="password" placeholder="Password">
											
											<button type="submit" class="btn">Sign up</button>
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			var LoginForm = document.getElementById("LoginForm");
			var RegForm = document.getElementById("RegForm");
			var Indicator = document.getElementById("Indicator");

			function register(){
				RegForm.style.transform ="translateX(0px)";
				LoginForm.style.transform ="translateX(0px)";
				Indicator.style.transform ="translateX(100px)";
			}
			function login(){
				RegForm.style.transform ="translateX(300px)";
				LoginForm.style.transform ="translateX(300px)";
				Indicator.style.transform ="translateX(0px)";
			}
		</script>

		<?php require "footer.php"?>

		

		
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
	</body>
</html>
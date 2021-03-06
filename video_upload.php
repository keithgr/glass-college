<?php

require('functions.php');

if(isset($_GET['upl']) && $_GET['upl'] === 'success') {
    echo '<h1>Upload successful!</h1>';
}

$content = '
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Upload your Video</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" enctype="multipart/form-data" action="upload.php" method="post">
					<span class="login100-form-title p-b-26">
						Share your experience!
					</span>
                    
					<span class="login100-form-title p-b-48">
						<img src="img/eyeGlass.png" alt="sm_logo">
					</span>

					<div class="wrap-input100 validate-input" data-validate="Must enter video title">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="text" name="title">
						<span class="focus-input100" data-placeholder="Video Title"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Please describe your experience">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="text" name="desc">
						<span class="focus-input100" data-placeholder="Description"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Choose video">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="file" name="vid" accept="video/*">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Submit
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main2.js"></script>

</body>
</html>';

echo $content;


?>
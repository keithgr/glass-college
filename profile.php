<!DOCTYPE html>
<html lang="en">
<head>
<title>Eperience</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="styles/experience.css">
<link rel="stylesheet" type="text/css" href="styles/experience_responsive.css">
<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
</head>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<body>

	<!-- Header section -->
	<header class="header-section">
		<div class="container" >
			<a href="index.html" class="site-logo">
				<img src="img/glassCollegeLogo.png" alt="logo">
			</a>
			<!-- Switch button -->
			<div class="nav-switch">
			<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				<ul class="main-menu">
                    <form action="index.php">
					<div class="topnav">
                        <strong style = "color: white">Search Engine</strong><input type="text" name = "search_key">
                        <input type="submit" value = "Submit" >
                    </div>
                    </form>
				</ul>
				<div class="header-btns">
					<a href="#" class="site-btn sb-c1">Upload</a>
					<a href="login.html" class="site-btn sb-c2">Login</a>
					<a href="register.html" class="site-btn sb-c3">Register</a>
				</div>
	</header>
	<!-- Header section end -->
	<div class="content_container">
		<div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

			<!-- General Information -->
			<div class="general_info d-flex flex-xl-column flex-md-row flex-column">
				<div>
					<div class="general_info_image">
						<div class="background_image" style="background-image:url(img/siena.jpg)"></div>
						<div class="header_button_2">
							<div class="d-flex flex-column align-items-center justify-content-center"><img src="img/download.png" alt=""></div>
						</div>
					</div>
				</div>
				<div class="general_info_content">
					<div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
						<div class="general_info_title">General Information</div>
						<ul class="general_info_list">
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="img/icon_1.png" alt=""></div>
								<div class="general_info_text">Name: <span>Siena</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"></div>
								<div class="general_info_text">Location: <span>515 Loudon Rd, Loudonville, NY 12211</span></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="img/icon_4.png" alt=""></div>
								<div class="general_info_text">(518) 783-2300</div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="img/icon_5.png" alt=""></div>
								<div class="general_info_text"><a href="mailto:contact@linque.com">www.siena.edu</a></div>
							</li>
						</ul>

						<!-- Social -->
						<div class="social_container">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Content -->

			<div class="main_content">
             
<?
                
                require('functions.php');
                
                $db = db_connect();
                $sql = "SELECT id FROM video WHERE college_id=19075 LIMIT 10";
                $result = $db->query($sql);
                
                foreach($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    
                    echo '
                    <video width="320" height="240" controls>
                        <source src="'.$id.'.mp4" type="video/mp4">
                    </video>
                    ';
                }
                
?>        
				<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
					<div class="main_subtitle">Siena</div>
					<div class="main_title">Siena</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					
					<!-- Experience -->

					<div class="experience">
						
						<!-- Experience Item -->
						<div class="exp_item d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div><div class="exp_time">Siena</div></div>
							<div class="exp_content">
								<div class="exp_title_container">
									<div class="exp_title">515 Loudon Rd, Loudonville, NY 12211</div>
									<div class="exp_subtitle">(518) 783-2300</div>
								</div>
								<div class="exp_text">
									<p>Siena College is a private institution that was founded in 1937. It has a total undergraduate enrollment of 3,174, its setting is suburban, and the campus size is 175 acres. It utilizes a semester-based academic calendar. Siena College's ranking in the 2019 edition of Best Colleges is National Liberal Arts Colleges, 135. Its tuition and fees are $36,975 (2018-19).</p>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
<div align='center'>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/experience.js"></script>
</body>
</html>
<?php
include './connection.php';
ob_start();
?>


<?php

session_start();
if(isset($_POST['b1']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
$log=mysqli_query($dbcon,"select * from user_log where uid='$t1' and pwd='$t2'and st='1'");
if(mysqli_num_rows($log)>0)
{
$r=mysqli_fetch_row($log);
if($r[3]=="admin")
{
    $_SESSION['uid']=$t1;
    header("location:./admin/home.php");
    
}
if($r[3]=="hos")
{
    $_SESSION['uid']=$t1;
    header("location:./hos/home.php");
}
if($r[3]=="client")
{
    $_SESSION['uid']=$t1;
    header("location:./client/home.php");
}
if($r[3]=="police")
{
    $_SESSION['uid']=$t1;
    header("location:./police/home.php");
}
if($r[3]=="usr")
{
    $_SESSION['uid']=$t1;
    header("location:./user/home.php");
}
}
else
{
    echo '<script>alert("Incorrect Username/Password")</script>'; 
}
    

}
                                    ?>


<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo $title ?> | Contact :: Trinity Technologies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Replenish a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="temp/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="temp/css/style6.css" rel='stylesheet' type='text/css' />
	<link href="temp/css/style.css" rel='stylesheet' type='text/css' />
	<link href="temp/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>


<body>
	<!-- banner-inner -->
	<div id="demo-1" class="page-content">
		<div class="dotts">
			<div class="header-top">
				<?php
                                        include 'menu.php';
                                ?>
			</div>
			<!--/banner-info-w3layouts-->
			<div class="banner-info-w3layouts text-center">
			</div>
			<!--//banner-info-w3layouts-->
		</div>
	</div>
	
	<!-- banner-text -->
	<!-- contact -->
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<h3 class="tittle text-center mb-lg-5 mb-3">
				<span>Welcome</span>Login</h3>
				<!---728x90--->
				
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-md-6 main_grid_contact">
						<div class="form">
							<h4 class="mb-4 text-left">Login Now</h4>
							<form method="post"enctype="multipart/form-data">
								<div class="form-group">
									<label class="my-2">Username</label>
									<input class="form-control" type="text" name="t1" placeholder="" required="">
								</div>
                                                            
								<div class="form-group">
									<label>password</label>
                                                                        <input class="form-control" type="password" name="t2" placeholder="" required="">
								</div>
                                                            
								<div class="input-group1">
									<input class="form-control" type="submit"name="b1" value="Submit">
								</div>
							</form>
						</div>
					</div>
                                    
                                    
                                    <div class="col-md-6 map">
                                        
                                        <img style="width: 100%;height: 590px" src="pic/25f1e18b3d1a406f95f66055babefa2e.gif">
                                    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- //contact -->
	<!---728x90--->
	<!--footer -->
	<footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			
			<div class="copyright mt-4">
				<p class="copy-right text-center ">&copy; 2021<?php echo $title ?>. All Rights Reserved | Design by
					<a href="#">Trinity Technologies </a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--model-forms-->
	<!--/Login-->
	
	<!--//Login-->
	<!--/Register-->
	
	<!--//Register-->

	<!--//model-form-->
	<!-- js -->
	<!--/slider-->
	<script src="temp/js/jquery-1.11.1.min.js"></script>
	<script src="temp/js/modernizr-2.6.2.min.js"></script>
	<!--//slider-->
	<!--search jQuery-->
	<script src="temp/js/classie-search.js"></script>
	<script src="temp/js/demo1-search.js"></script>
	<!--//search jQuery-->

	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- //js -->
	<script src="temp/js/bootstrap.js"></script>
	<!--/ start-smoth-scrolling -->
	<script src="temp/js/move-top.js"></script>
	<script src="temp/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--// end-smoth-scrolling -->
</body>

</html>
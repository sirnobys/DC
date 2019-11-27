<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Distress Call</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Distress Call, SOS" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-bg">
		<!-- title -->
		<h1>Distress Call Admin Panel</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img class ="imgsize" src="images/ucc.png" alt="" />
					<style>
						.imgsize {
						  width:6rem;
						  height:6rem;
						}
						</style>
				</div>
				<form action="./controllers/loginsession.php" method="post">
					<p class="legend">Login Here<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="text" placeholder="Username" name="username" required />
						<span class="fa fa-user"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="password" required />
						<span class="fa fa-unlock"></span>
					</div>
					<button type="submit" name="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
				<!-- <a href="#" class="bottom-text-w3ls">Forgot Password?</a> -->
			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->
		<div class="copyright">
			<h2>&copy; 2019 Latest Login Form. All rights reserved | Design by
				<a href="http://w3layouts.com" target="_blank">W3layouts</a>
			</h2>
		</div>
		<!-- //copyright -->
	</div>
</body>

</html>
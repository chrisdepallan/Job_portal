<?php
// Assuming you have a database connection established
// $conn = new mysqli($host, $username, $password, $database);

// Assuming you have the "id" value from the GET request
if(isset($_GET['id'])){
$id = $_GET["id"];

// Construct the SQL query
$query = "SELECT * FROM resume WHERE id = $id";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emmanuel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Execute the query
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the data as an associative array
    $resumeData = $result->fetch_assoc();
    
    // Output the fetched data
    // print_r($resumeData);


?>



<!DOCTYPE HTML>
<html>
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(images/portfolio.jpg);"></div>
							<h1><span><?php echo $resumeData["nickname"];?></span></h1>
							<h3><span><?php  echo  $resumeData["main_title"]?></span></h3>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="<?php echo $resumeData["twitter_link"]?>"><i class="icon-twitter2"></i></a></li>
									<li><a href="<?php echo $resumeData["facebook_link"]?>"><i class="icon-facebook2"></i></a></li>
									<li><a href="<?php echo $resumeData["linkedin_link"]?>"><i class="icon-linkedin2"></i></a></li>
									<li><a href="<?php echo $resumeData["website"]?>"><i class="icon-dribbble2"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Full Name:</span><span class="second-block"><?php echo $resumeData["full_name"]?></span></li>
						<li><span class="first-block">Phone:</span><span class="second-block"><?php echo $resumeData["phone"]?></span></li>
						<li><span class="first-block">Email:</span><span class="second-block"><?php echo $resumeData["email"]?></span></li>
						<li><span class="first-block">Website:</span><span class="second-block"><?php echo $resumeData["website"]?></span></li>
						<li><span class="first-block">Address:</span><span class="second-block"><?php echo $resumeData["address"]?></span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Hello There!</h2>
					<p><?php echo $resumeData["about_text_1"]?></p>
					<p><?php echo $resumeData["about_text_2"]?></p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="<?php echo $resumeData["twitter_link"]?>"><i class="icon-twitter2"></i></a></li>
							<li><a href="<?php echo $resumeData["facebook_link"]?>"><i class="icon-facebook3"></i></a></li>
							<li><a href="<?php echo $resumeData["linkedin_link"]?>"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>My Resume</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Work Experience</h3></div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title"><?php echo $resumeData["work_experience_title_1"]?></h3>
									<span class="company"><?php echo $resumeData["work_experience_years_1"]?></span>
								</div>
								<div class="timeline-body">
									<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title"><?php echo $resumeData["work_experience_title_2"]?></h3>
									<span class="company/experience"><?php echo $resumeData["work_experience_years_1"]?></span>
								</div>
								<div class="timeline-body">
									<!-- <p>Far far away, behind the word mountains, they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title"><?php echo $resumeData["work_experience_title_3"]?></h3>
									<span class="company/experience"<?php echo $resumeData["work_experience_years_1"]?></span>
								</div>
								<div class="timeline-body">
									<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
								</div>
							</div>
						</li>

						<br>
						<li class="timeline-heading text-center animate-box">
							<div><h3>Education</h3></div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title"><?php echo $resumeData["education_title_1"]?></h3>
									<span class="company"><?php echo $resumeData["education_passout_years_1"]?></span>
								</div>
								<div class="timeline-body">
									<!-- <p>Far far away, behind the word mountains, they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title"><?php echo $resumeData["education_title_2"]?></h3>
									<span class="company"><?php echo $resumeData["education_passout_years_2"]?></span>
								</div>
								<div class="timeline-body">
									<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
								</div>
							</div>
						</li>
						<!-- <li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">
										</h3>
									<span class="company">College Name - 1999 - 2001</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
						</li> -->
						<!-- <li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Graduation</h3>
									<span class="company">College Name - 1994 - 1998</span>
								</div>
								<div class="timeline-body">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</li> -->
			    	</ul>
				</div>
			</div>
		</div>
	</div>
	
<!-- 
	<div id="fh5co-features" class="animate-box">
		<div class="container">
			<div class="services-padding">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>My Services</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-paintbrush"></i>
							</span>
							<div class="feature-copy">
								<h3>Web Design</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-briefcase"></i>
							</span>
							<div class="feature-copy">
								<h3>Branding</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
							<div class="feature-copy">
								<h3>Analytics</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-4 text-center">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-bargraph"></i>
							</span>
							<div class="feature-copy">
								<h3>Web Developent</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>

					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
							<div class="feature-copy">
								<h3>Web Marketing</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Support</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
<!-- 
	<div id="fh5co-skills" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Skills</h2>
				</div>
			</div>
			<div class="row row-pb-md">
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="95"><span><strong>HTML5</strong>95%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="93"><span><strong>CSS3</strong>93%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>jQuery</strong>90%</span></div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="89"><span><strong>PHP</strong>89%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="85"><span><strong>MySQL</strong>85%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>AngularJS</strong>90%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="85"><span><strong>Ruby</strong>85%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>Java</strong>90%</span></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">HTML5/CSS3</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">WordPress</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">PHP</span><span class="value-right">80%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Java</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Design</span><span class="value-right">100%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Ruby</span><span class="value-right">70%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Python</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">jQuery</span><span class="value-right">75%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Work</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-1.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-2.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-3.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-4.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Design</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-5.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Website</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-6.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-7.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-8.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Post on Medium</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/portfolio-1.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">Mar. 15th 2016</span>
							<h3><a href="#">Photoshoot On The Street</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/portfolio-2.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">Mar. 15th 2016</span>
							<h3><a href="#">Surfing at Philippines</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/portfolio-3.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">Mar. 15th 2016</span>
							<h3><a href="#">Capture Living On Uderwater</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div> -->
	
	<div id="fh5co-started" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Hire Me!</h2>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p><a href="#" class="btn btn-default btn-lg">Contact Us</a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- <div id="fh5co-consult">
		<div class="video fh5co-video" style="background-image: url(images/cover_bg_1.jpg);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			<h2>Contact</h2>
			<form action="#">
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" id="fname" class="form-control" placeholder="Your firstname">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" id="lname" class="form-control" placeholder="Your lastname">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="email" class="form-control" placeholder="Your email address">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="Send Message" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div> -->

	<div id="map" class="fh5co-map"></div>
	</div>
	
	<!-- <div id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; 2017 Free HTML5 Template. All Rights Reserved. <br>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></p>
				</div>
			</div>
		</div>
	</div> -->

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src="js/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	
	
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>

<!-- Mirrored from technext.github.io/profile/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Aug 2023 04:49:39 GMT -->
</html>

<?php
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
}else{
echo" no id provided";
}
?>
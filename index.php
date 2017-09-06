<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BigJay.co.uk</title>
		<link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">
		<link rel="icon" href="/images/icon.png" type="image/x-icon">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/bulma.min.css">
		<link rel="stylesheet" href="/css/main.css">
		
        <script src="/js/jquery.min.js"></script>
	</head>
	<body>
		<div id="page-loader" class="pageloader"></div>

		<section class="hero is-primary">
			<div class="hero-head">
				<header class="nav">
					<div class="container">
						<div class="nav-left">
							<a class="nav-item" onclick="home()"><b>BigJay.co.uk</b></a>
						</div>
					
						<div class="nav-right">
							<span class="nav-item">
								<a class="button is-primary is-inverted" href="https://github.com/bigjaymalcolm" target="_blank">
									<span class="icon">
										<i class="fa fa-github"></i>
									</span>
									<span>Github</span>
								</a>
							</span>
						</div>
					</div>
				</header>
			</div>
				
			<div class="hero-body">
				<div class="container">
					<h1 class="title">
						Jamie Malcolm
					</h1>
					<h2 class="subtitle">
						Online Portfolio
					</h2>
				</div>
			</div>
				
			<div class="hero-foot">
				<nav class="tabs is-boxed">
					<div class="container">
						<ul>
							<li id="overview-nav" class="is-active"><a onclick="overview()">Overview</a></li>
							<li id="portfolio-nav"><a onclick="portfolio()">Portfolio</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</section>

		<div id="overview-div">
			<section  class="section">
				<div class="container">
					<h1 class="title">Overview</h1>
				</div>
			</section>
		</div>

		<div id="portfolio-div" class="hidden">
			<nav class="navbar has-shadow">
				<div class="container">
					<div class="navbar-tabs">
						<a id="portfolio-tab-1" class="navbar-item is-tab is-active" onclick="project1()">
							Web Development
						</a>
						<a id="portfolio-tab-2" class="navbar-item is-tab" onclick="project2()">
							Project 2
						</a>
					</div>
				</div>
			</nav>
			
			<div id="portfolio-div-1">
				<section class="section">
					<div class="container content">
						<h1 class="title">Web Development</h1>
						<p>Website development has always been a hobby of mine, it's something I've taught myself in my spare time for a good few years now. I started by developing simple HTML websites using solely HTML and CSS but have added new skills to my arsenal by adding PHP, Javascript, jQuery, and MySQL to my toolbox of web development skills. Along the way I've also learnt how to use CMSs (Content Management Systems) such as WordPress. For my personal websites I tend to create the site myself from scratch rather than use a CMS as It's what I enjoy, but I see the potential of a CMS so have learnt how to use them for cases where it is necessary to know how.</p>
						<p>As well as developing the website, I have also spent time learning about the hosting part of websites and have hosted many websites myself on pre-configured web hosting services as well as using a VPS to set up the web hosting manually through Debian 8.</p>
						<p>Examples of websites I have developed, or helped develop, can be found below.</p>
					</div>
				</section>
			</div>

			<div id="portfolio-div-2" class="hidden">
				<section class="section">
					<div class="container">
						<h1 class="title">Project 2</h1>
					</div>
				</section>
			</div>
		</div>
	</body>
	
	<script>
		document.addEventListener('DOMContentLoaded', function () 
		{
			$("#page-loader").addClass("is-active");

			var pageloaderTimeout = setTimeout( function() 
			{
				$("#page-loader").removeClass("is-active");
				clearTimeout( pageloaderTimeout );
			}, 1000 );
		});
	
		function home()
		{
			$("#project-tab-1").addClass("is-active");
			$("#project-tab-2").removeClass("is-active");
			$("#project-div-1").removeClass("hidden");
			$("#project-div-2").addClass("hidden");
			$("#overview-nav").addClass("is-active");
			$("#portfolio-nav").removeClass("is-active");
			$("#overview-div").removeClass("hidden");
			$("#portfolio-div").addClass("hidden");
		}

		function overview()
		{
			$("#overview-nav").addClass("is-active");
			$("#portfolio-nav").removeClass("is-active");
			$("#overview-div").removeClass("hidden");
			$("#portfolio-div").addClass("hidden");
		}
	
		function portfolio()
		{
			$("#portfolio-nav").addClass("is-active");
			$("#overview-nav").removeClass("is-active");
			$("#portfolio-div").removeClass("hidden");
			$("#overview-div").addClass("hidden");
		}

		function project1()
		{
			$("#portfolio-tab-1").addClass("is-active");
			$("#portfolio-tab-2").removeClass("is-active");
			$("#portfolio-div-1").removeClass("hidden");
			$("#portfolio-div-2").addClass("hidden");
		}

		function project2()
		{
			$("#portfolio-tab-2").addClass("is-active");
			$("#portfolio-tab-1").removeClass("is-active");
			$("#portfolio-div-2").removeClass("hidden");
			$("#portfolio-div-1").addClass("hidden");
		}
	</script>
</html>
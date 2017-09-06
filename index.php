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
	<body class="site">
		<div class="pageloader"></div>
		
		<div class="site-content">
			<section class="hero is-primary">
				<div class="hero-head">
					<header class="nav">
						<div class="container">
							<div class="nav-left">
								<a class="nav-item" href="https://bigjay.co.uk">
									<img src="/images/logo.png" alt="BigJay.co.uk" width="112" height="28">
								</a>
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
					<nav class="tabs is-boxed is-fullwidth">
						<div class="container">
							<ul>
								<li id="overview-nav" class="is-active"><a onclick="overview()">Overview</a></li>
								<li id="projects-nav"><a onclick="projects()">Projects</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</section>
			
			<section id="overview-div" class="section">
				<div class="container">
					<h1 class="title">Overview</h1>
				</div>
			</section>
			
			<section id="projects-div" class="section hidden">
				<div class="container">
					<h1 class="title">Projects</h1>
				</div>
			</section>
		</div>
	</body>
	
	<script>
	document.addEventListener('DOMContentLoaded', function () 
	{
		var $pageloader = Array.prototype.slice.call(document.querySelectorAll('.pageloader'), 0);
		
		$pageloader[0].classList.toggle('is-active');
		
		var pageloaderTimeout = setTimeout( function() 
		{
			$pageloader[0].classList.toggle('is-active');
			clearTimeout( pageloaderTimeout );
		}, 1000 );
			
		var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
		
		if ($navbarBurgers.length > 0) 
		{
			$navbarBurgers.forEach(function ($el) 
			{
				$el.addEventListener('click', function () 
				{
					var target = $el.dataset.target;
					var $target = document.getElementById(target);
					$el.classList.toggle('is-active');
					$target.classList.toggle('is-active');
				});
			});
		}
	});
	
	function overview()
	{
		$("#overview-nav").addClass("is-active");
		$("#projects-nav").removeClass("is-active");
		$("#overview-div").removeClass("hidden");
		$("#projects-div").addClass("hidden");
	}
	
	function projects()
	{
		$("#projects-nav").addClass("is-active");
		$("#overview-nav").removeClass("is-active");
		$("#projects-div").removeClass("hidden");
		$("#overview-div").addClass("hidden");
	}
	</script>
</html>
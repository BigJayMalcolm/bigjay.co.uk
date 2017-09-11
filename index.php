<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jamie Malcolm</title>
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
							<li id="overview-nav" class="is-active"><a onclick="overview()">About Me</a></li>
							<li id="portfolio-nav"><a onclick="portfolio()">Portfolio</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</section>

		<div id="overview-div">
			<section class="section">
				<div class="container content">
					<h1 class="title">About Me</h1>
					<p>I am 26 years old and live on Jurassic Coast in Dorset, England. I graduated from De Montfort university in Leicester with an honours degree in Computer Games Programming in 2013. Since unviersity, I have held several roles in the software develpment sector.</p>
					<p>My first job after graduation was as a Junior Software Developer for Sertec Group Holdings Ltd based in Coleshill in the Midlands. The job involved maintaining and upgrading the in-house software which controlled all aspect of the companies operation from Financial management to staff clocking in/out systems as well as production records. After working there for a year and 4 months I felt it was time to progress my career further.</p>
					<p>My next job working as a Process Automation Consultant for a new startup company called FSJ Consulting Ltd. During my 3 months working for FSJ I recieved foundation training in UIPath and BluePrism which taught me a lot in regards to using computers are roots to automate dull processes allowing people to do more practical work instead of the menial tasks. Unfortunately FSJ did not manage to keep the business coming in at this tiem and I was made redundant after 3 months.</p>
					<p>I then started working for Loop Technology based in Dorchester, Dorset, as a Software Engineer. Loop Technology designs, builds, and deploys bespoke robotic systems to customers based all over the world. I have used many different technologies whilst working for Loop Technology including PLC programming, KUKA robotics, Siemens PLC logic, WPF, WCF, UWP (Universal Windows Platform), C#, Javascript, jQuery, KnockoutJS, HTML, PHP, and SQL to name a few. Other technologies and APIs are sometimes learnt on a project by project basis, depending on what the project involves.</p>
					<p>My main hobbies and interests are gaming and restoring classic cars. I got my first classic car in 2013 which was a Mini Cooper 1.3i that I restored over 3 years to get it back ino a great state. After that I obtained a 1970 MGB GT which is my next big project.</p>
					<p>Gaming has been a passion of mine from a young age and is the reason I went and did a degree in Computer Games Programming. Since university I have not worked in the games industry but have spent some of my spare time working on modifications for games and teaching myself games development in Unity as well as playing games.</p>
				</div>
			</section>
		</div>

		<div id="portfolio-div" class="hidden">
			<nav class="navbar has-shadow">
				<div class="container">
					<div class="navbar-tabs">
						<a id="portfolio-tab-1" class="navbar-item is-tab is-active" onclick="portfolio1()">
							Web Development
						</a>
						<a id="portfolio-tab-2" class="navbar-item is-tab" onclick="portfolio2()">
							Games Development
						</a>
						<!--<a id="portfolio-tab-3" class="navbar-item is-tab" onclick="portfolio3()">
							Application Development
						</a>-->
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
					<div class="container content">
						<h1 class="title">Games Development</h1>
						<p>Gaming has been a passion of mine from a very young age. My first gaming experiences came from my Dad's original Gameboy and NES (Nintendo Entertainment System) but getting my own Nintendo 64 for Christmas. From there I went on to own almost every console since which is what led me to university to study Computer Games Programming.</p>
						<p>After university I have gone into more commercial programming, but gaming has still remained a passion which I have spent a lot of my spare time on.</p>
						<p>The core of games programming in my spare time has been spent more on modifications for games than creating games themselves. Though I have spent some time teaching myself Unity.</p>
					</div>
				</section>
			</div>

			<div id="portfolio-div-3" class="hidden">
				<section class="section">
					<div class="container content">
						<h1 class="title"> Development</h1>
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
			$("#portfolio-tab-1").addClass("is-active");
			$("#portfolio-tab-2").removeClass("is-active");
			$("#portfolio-tab-3").removeClass("is-active");
			$("#portfolio-div-1").removeClass("hidden");
			$("#portfolio-div-2").addClass("hidden");
			$("#portfolio-div-3").addClass("hidden");
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

		function portfolio1()
		{
			$("#portfolio-tab-1").addClass("is-active");
			$("#portfolio-tab-2").removeClass("is-active");
			$("#portfolio-tab-3").removeClass("is-active");
			$("#portfolio-div-1").removeClass("hidden");
			$("#portfolio-div-2").addClass("hidden");
			$("#portfolio-div-3").addClass("hidden");
		}

		function portfolio2()
		{
			$("#portfolio-tab-1").removeClass("is-active");
			$("#portfolio-tab-2").addClass("is-active");
			$("#portfolio-tab-3").removeClass("is-active");
			$("#portfolio-div-1").addClass("hidden");
			$("#portfolio-div-2").removeClass("hidden");
			$("#portfolio-div-3").addClass("hidden");
		}

		function portfolio3()
		{
			$("#portfolio-tab-1").removeClass("is-active");
			$("#portfolio-tab-2").removeClass("is-active");
			$("#portfolio-tab-3").addClass("is-active");
			$("#portfolio-div-1").addClass("hidden");
			$("#portfolio-div-2").addClass("hidden");
			$("#portfolio-div-3").removeClass("hidden");
		}
	</script>
</html>
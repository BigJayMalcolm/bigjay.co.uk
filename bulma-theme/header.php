<html>
	<head>
		<title><?php echo get_bloginfo( 'name' ); ?></title>
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/bulma.min.css ?>">
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css ?>">
	</head>
<body>
	<div id="page-loader" class="pageloader"></div>

	<section class="hero is-primary">				
		<div class="hero-body">
			<div class="container">
				<h1 class="title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
				<h2 class="subtitle"><?php echo get_bloginfo( 'description' ); ?></h2>
			</div>
		</div>

		<div class="hero-footer">
			<nav class="tabs is-boxed">
				<div class="container">
					<ul>
						<li><a href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a></li>
						<?php wp_list_pages( '&title_li=' ); ?>
					</ul>
				</div>
			</nav>
		</div>
	</section>
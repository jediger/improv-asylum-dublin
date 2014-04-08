
ctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="icon" type="image/x-icon" href="/favicon.ico" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href='http://fonts.googleapis.com/css?family=Fjalla+One|Muli' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					<a href="http://improvasylum.com/" class="lb-link">Visit Our Boston Site</a>
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
						<div class="actions">
							<a href="https://www.facebook.com/Improvasylum" class="facebook">Facebook</a>
							<a href="http://www.youtube.com/user/ImprovAsylum" class="youtube">Youtube</a>
							<a href="http://sa1.seatadvisor.com/sabo/servlets/EventSearch?presenter=TLTIVOLI&event=IAB" class="button">Buy Tickets</a>
						</div>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
			<section class="content">

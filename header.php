<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Resto</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo(get_template_directory_uri()); ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo(get_template_directory_uri()); ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo(get_template_directory_uri()); ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo(get_template_directory_uri()); ?>/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo(get_template_directory_uri()); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'resto' ); ?></a>

	<header role="banner">
		<div class="wrapper">
			<h1 class="logo">Resto</h1>

			<nav role="navigation">
				<h2>Main Navigation</h2>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav>
		</div>
	</header>

<div id="content" class="site-content">

<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />

		<!-- Stylesheets-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Anybody:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	</head>
	

	<body <?php body_class()?>>
		<header class="header">
			<div class="header__inner">
				<div class="header__logo">
					<a href="<?php echo esc_url(home_url('/')) ?>">
						<img src="<?php echo THEME_URL; ?>_dev/img/logo.svg" alt="DBD logo">
					</a>
				</div>
				<div class="hamburger">
					<span class="hamburger__line1"></span>
					<span class="hamburger__line2"></span>
					<span class="hamburger__line3"></span>
				</div>
				<nav class="header__nav">
					<?php wp_nav_menu(['theme_location' => 'main_nav']); ?>
				</nav>
				<div class="header__right">
					<div class="header__cta">
						<a href="#" class="button">napisz do nas</a>
					</div>
					<div class="header__lang">
						<div class="header__lang-icons">
							<a href="#"><img src="<?php echo THEME_URL; ?>_dev/img/poland.svg" alt="PL flag"></a>
						</div>
						<div class="header__lang-arrow">
							<img src="<?php echo THEME_URL; ?>_dev/img/chevron-down.svg" alt="arrow-down">
						</div>
					</div>
				</div>
			</div>
		</header>


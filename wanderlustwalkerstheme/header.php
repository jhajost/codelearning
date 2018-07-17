<!DOCTYPE html>
<html lang="pl-PL">
<head>
<meta charset="utf-8">
<title><?php wp_title(); ?></title>
<meta name="description" content="Opis strony, wyświetlany np. w wyszukiwarkach">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta property="og:type" content="website"/>
<meta property="og:title" content="Wanderlust Walkers - wędrówki po Anglii z przewodnikiem"/>
<meta property="og:description" content="Naturalna nawigacja, odkrywanie piękna angielskiej prowincji, przygody, wyprawy"/>
<meta property="og:image" content="{obrazek udostępniania}"/>
<link rel="shortcut icon" href="favicon.png">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</head>
<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<a tabindex="1" id="menu-button">
			<i class="fa fa-bars"></i>
			<i class="fa fa-times"></i>
		</a>
		<nav>
			<?php wp_nav_menu( array(
				'theme_location' => 'nav_menu',
				'depth' => 1,
			) );
			?>
		</nav>
	</header>
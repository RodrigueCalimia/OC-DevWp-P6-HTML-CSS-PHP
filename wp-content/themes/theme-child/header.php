<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="container">
<header id="header" role="banner">

<nav id="navigation" class="barre_logo_menu">
<?php if(has_custom_logo()) : ?>
    <a class="logo-brand" href="<?php bloginfo('url'); ?>"><?php the_custom_logo(); ?></a>
<?php else : ?>
<h1><a class="site-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<?php endif; ?>
<?php
wp_nav_menu(
array(
'theme_location' => 'main-menu',
'menu_id' => 'menu-principal',
'container' => false, /*suprime la div par défaut de WordPress avec la class menu-menu-container*/
'menu-class' => 'navbar-nav', /* redefinit la class de la balise nav*/
)
);
?>
</nav>
</header>
<div id="container">
<main id="content" role="main">
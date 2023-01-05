<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div id="branding">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<?php
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
?>
</div>
<div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="navigation" class="barre_logo_menu">
<?php if(has_custom_logo()) : ?>
<?php the_custom_logo(); ?>
<?php else : ?>
<h1><a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
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
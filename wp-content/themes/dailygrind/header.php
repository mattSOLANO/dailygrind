<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dailygrind
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

<script type="text/javascript" src="//use.typekit.net/qdm5rsj.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header class="topHeader">
    <div class="headerInner">
      <p class="logo"><a href="<?php echo home_url( '/' ); ?>"><i class="fa fa-chevron-left"></i>d<span>g</span><i class="fa fa-chevron-right"></i></a></p>
      
      <div class="searchBar">
        <?php get_search_form(); ?>

        <i class="fa fa-search"></i>
      </div>

    </div>
  </header>

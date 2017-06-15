<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Thermokool.com
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<style>
@import 'https://fonts.googleapis.com/css?family=Fjalla+One';
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,700,600,300);
</style> 



<?php wp_head(); ?>
</head>

<body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34750448-1', 'auto');
  ga('send', 'pageview');

</script>

<div class="header-wrap">
        <div class="logo-box">
        	<div class="restrictor">
            	<a href="<?php echo home_url(); ?>">
                    <div class="logo">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" style="width:100%;">
                    </div>
                </a>
            </div>
        </div>
        <div class="nav-box">
        	<div class="restrictor">
            	<div class="nav">
                	<div class="menu-restrictor">
                        <div class="menu1">
                        	<div class="button" onclick="toggle_visibility('dropdown2')">
                            	<div class="button-image">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/menu.png" style="width:20px; height:15px; margin-right:15px;">
                                </div>
                                <div class="button-text">
                                	MENU
                                </div>
                            </div>
                        	<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                        </div>
                        <div class="search">
                        	<div id="search-bar">
                                <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
                                    <div>
                                        <input type="text" id="s" name="s" value="" placeholder="search" />
                                        <input type="submit" value="&nbsp;" id="searchsubmit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="dropdown2" class="drop">
                	<div class="menu-restrictor">
                        <div class="menu2">
                        	<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php get_title_tag(); ?></title>

    <!--Remy Sharp Shim -->
    <!--[if lte IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
    </script>
    <![endif]-->
    <link href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php get_the_excerpt(); ?>">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});
		});
    </script>
 <!--wp head function start-->
 <?PHP wp_head(); ?>
 <!--Die wp head function die!! NOTE: die is not the PHP die statement -->
</head>
<body <?PHP body_class(); ?>>
    <header>
        <div id="head">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo">
        </div>
    </header>

    <nav>


<!--  Beginning of Static Nav 
        <ul>
            <li>
                Home
            </li>
            <li>
                <a href="#">
                    About
                </a>
            </li>
            <li>
                <a href="#">
                    blog
                </a>
            </li>
            <li>
                <a href="#">
                    Contact
                </a>
            </li>
            <li>
                <a href="#">
                    Portfolio
                </a>
            </li>

        </ul>
        END of Static Nav  -->

    <!--++++ Start of WordPress Nav ++++-->
        <?PHP wp_nav_menu(); ?>
    <!--++++ End of WordPress Nav ++++-->

    </nav>
    <!--++++++++++ START MOBILE NAVIGATION ++++++++-->
    <button class="nav-button">Toggle Navigation</button>
    <div class="mobile-logo">
        <a href="index.html" title="Home">
            <img src="images/logo-small.png" alt="small logo">
        </a>
    </div>

    <ul class="primary-nav">
        <li>
            <a href="index.html">
                Home
            </a>
        </li>
        <li>
            <a href="#">
                About
            </a>
        </li>
        <li>
            <a href="#">
                Blog
            </a>
        </li>
        <li>
            <a href="#">
                Contact
            </a>
        </li>
        <li>
            <a href="#">
                Portfolio
            </a>
        </li>        
    </ul>
    <script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});
		});
    </script>
    <!--++++++++++ END MOBILE NAVIGATION ++++++++-->
    

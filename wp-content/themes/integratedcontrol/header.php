<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <title><?php bloginfo('name') ?></title>
        <?php // wp_head(); ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prettySticky.css" type="text/css">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
    </head>

    <body>
        
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jQuery.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/functions.js" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/events.js" charset="utf-8"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

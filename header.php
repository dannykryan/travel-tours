<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
 </head>
<body  <?php body_class(); ?> >
    <header class="site-header">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site Logo"></a></h1>
    </header>
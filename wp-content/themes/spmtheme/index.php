<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
    <style>
        @import url('https://fonts.googleapis.com/css?family=IBM+Plex+Mono');
    </style>
</head>
<body <?php body_class(); ?>>
<main class="wrap">
        <section class="content-area content-thin">
          <div class="callout"><h1>Steam-powered Media</h1>
              <h2>A single-person art collective with multiple personalities</h2>
          </div>
        </section>
 </main>
<?php get_footer(); ?>
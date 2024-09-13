<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php wp_head(); ?>

  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Não enfrente os desafios sozinho. Agende uma sessão de terapia!">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" />
  <title><?php bloginfo('title') ?></title>


</head>



<body>
  <!-- Google Tag Manager (noscript) -->
  <!-- End Google Tag Manager (noscript) -->

  <?= get_template_part("templates/components/button-whats") ?>
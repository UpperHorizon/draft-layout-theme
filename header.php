<!--
  A typical WordPress theme header containing <head> and opening <html> and <body> tags
  Important: since this file contains unclosed tags and PHP that breaks the HTML structure,
  don't make this file editable inside Draft Layout by putting a PHP comment with JSON like:

  { "dl-type": "template", ...}
  
  Instead, keep this file minimal and put any editable sections (e.g. navigation menus) inside
  a separate file and import it here with `get_template_part()`.
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  wp_get_document_title(); // Echos <title> tag
  wp_head(); // Triggers hook to enqueue stuff
  ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); // Triggers hook to enqueue stuff ?>

  <!-- Import the editable header and navigation menu component -->
  <?php get_template_part('components/header') ?>
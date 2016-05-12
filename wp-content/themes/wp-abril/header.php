<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- carregando titulo dinamicamente do wordpress -->
  <title><?php  wh_title(); ?></title>
  <!-- carregando style.css da raiz do tema caos exista -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

  <!-- carregando scripts dinamicamente no head pelo wordpress -->
  <?php wp_head(); ?>
</head>
<body>


<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- carregando titulo dinamicamente do wordpress -->
  	<title><?php  wp_title(); ?></title>
  	<!-- carregando style.css da raiz do tema caos exista -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  	<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css">

  	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  	<!-- carregando scripts dinamicamente no head pelo wordpress -->
  	<?php wp_head(); ?>
</head>
<body>

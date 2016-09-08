<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="<?php echo $site->author()->html() ?>">
  <link rel="shortcut icon" href="<?= url('../favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?= url('../favicon.png') ?>" type="image/png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
  <script src="/projects/placeworkers.com/assets/js/modernizr.custom.js"></script>
  <script src="/projects/placeworkers.com/assets/js/main.js"></script>

  <?php echo css('/assets/css/main.css') ?>

</head>
<body>

<header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>"><img src="<?php echo url('/assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" /></a>
    <?php snippet('menu') ?>
</header>

<script src="/projects/placeworkers.com/assets/js/classie.js"></script>
<script src="/projects/placeworkers.com/assets/js/demo1.js"></script>

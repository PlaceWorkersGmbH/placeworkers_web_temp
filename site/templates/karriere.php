<?php snippet('header') ?>

<div class="teaser"><img src="../placeworkers.com/assets/images/hiring.svg" /></div>

<main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
      <?php snippet('karriere') ?>
    </div>

</main>

<?php snippet('footer') ?>

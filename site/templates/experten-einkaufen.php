<?php snippet('header') ?>

<main class="main" role="main">
  <div class="text cf">
    <h1><?php echo $page->title()->html() ?></h1>
    <p><?php echo $page->text()->kirbytext() ?></p>
    <div class="btn"><a href="mailto:contact@placeworkers.com?subject=Experten%20einkaufen">E-Mail senden</a></div>
  </div>
</main>

<?php snippet('footer') ?>

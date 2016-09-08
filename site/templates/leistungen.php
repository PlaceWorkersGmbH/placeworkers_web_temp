<?php snippet('header') ?>

<div class="grid">
  <div class="item-service">
    <img src="../placeworkers.com/assets/images/gabelstapler.jpg" alt="<?php echo $page->title()->html() ?>" >
  </div>
  <div class="item-service">
    <img src="../placeworkers.com/assets/images/mann-mit-helm.jpg" alt="<?php echo $page->title()->html() ?>" >
  </div>
  <div class="item-service">
    <img src="../placeworkers.com/assets/images/atomkraft.jpg" alt="<?php echo $page->title()->html() ?>" >
  </div>
  <div class="item-service">
    <img src="../placeworkers.com/assets/images/mann-display.jpg" alt="<?php echo $page->title()->html() ?>" >
  </div>
  <div class="item-service">
    <img src="../placeworkers.com/assets/images/kraftwerk.jpg" alt="<?php echo $page->title()->html() ?>" >
  </div>
  <div class="item-service">
    <img src="../placeworkers.com/assets/images/stromkasten.jpg" alt="<?php echo $page->title()->html() ?>" >
  </div>
</div>

<main class="main" role="main">
  <div class="text">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
    <?php snippet('leistungen') ?>
  </div>
</main>

<?php snippet('footer') ?>

<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <p><?php echo $page->text()->kirbytext() ?></p>
      <?php snippet('stellen') ?>
    </div>

  </main>

<?php snippet('footer') ?>

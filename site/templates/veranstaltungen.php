<?php snippet('header') ?>

<main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php snippet('veranstaltungen') ?>
    </div>

</main>

<?php snippet('footer') ?>

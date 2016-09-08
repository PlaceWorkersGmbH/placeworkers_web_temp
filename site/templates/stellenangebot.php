<?php snippet('header') ?>

<main class="main" role="main">
  <div class="text">
    <h1 class="job">→ <?php echo $page->title()->html() ?></h1>
    <p><?php echo $page->titletwo()->kirbytext() ?></p>
    <hr>

    <div class="grid">
      <div class="item-3">
        <?php echo $page->text()->kirbytext() ?>
        <p><a href="<?php echo url('karriere/stellenangebote') ?>">← Stellenübersicht</a></p>
      </div>
      <div class="contact-item">
        <?php snippet('contactperson') ?>
      </div>

  </div>
</main>

<?php snippet('footer') ?>

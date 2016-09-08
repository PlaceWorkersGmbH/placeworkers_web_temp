<?php snippet('header') ?>

<section>
  <div id="video-bg">
    <!-- <video autoplay="true" loop="true" muted poster="<?php e($fallback = $page->image('fallback.png'), $fallback->url()) ?>">
    <?php if($mp4 = $page->file('teaser.mp4')): ?>
      <source src="<?php echo $mp4->url() ?>" type="video/mp4" />
    <?php endif ?>
    <?php if($webm = $page->file('teaser.webm')): ?>
      <source src="<?php echo $webm->url() ?>" type="video/webm" />
    <?php endif ?>
    <?php if($ogg = $page->file('teaser.ogv')): ?>
      <source src="<?php echo $ogg->url() ?>" type="video/ogg" />
    <?php endif ?>
    Your browser does not support the video tag.
    </video> -->
    <div class="image-teaser"></div>
  </div>

  <div class="video-overlay">
    <div class="text-overlay">
    <?php echo $page->text()->kirbytext() ?>
    </div>
    <div class="arrow bounce"></div>
  </div>
</section>

<section>


  <?php snippet('what-we-do') ?>


</section>

<?php snippet('footer') ?>

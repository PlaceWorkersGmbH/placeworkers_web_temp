<div class="grid">
<?php foreach($page->children()->visible() as $process): ?>
   <div class="item">
      <div class="pad">
      <?php if($image = $process->images()->first()): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $process->title()->html() ?>" class="icon" >
      <?php endif ?>
      <h2><?php echo $process->title()->html() ?></h2>
      <div class="arrow-down"></div>
      <?php echo $process->text()->kirbytext() ?>
      </div>
    </div>
<?php endforeach ?>
</div>


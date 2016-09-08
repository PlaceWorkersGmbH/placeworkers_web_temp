<?php foreach($page->children()->visible() as $position): ?>
  <div class="grid">
    <div class="icon">
      <?php if($image = $position->images()->sortBy('sort', 'asc')->first()): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $position->title()->html() ?>" >
      <?php endif ?>
    </div>
    <div class="item-3">
      <div class="pad-grau">
        <h2><?php echo $position->title()->html() ?></h2>
        <p><?php echo $position->text() ?></p>
      </div>
    <div class="arrow-down-karriere"></div>
    </div>

    </div>
    <?php $i++; ?>
<?php endforeach ?>


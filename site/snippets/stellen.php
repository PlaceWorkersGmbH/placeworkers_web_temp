<div class="grid">
<?php foreach($page->children()->visible() as $stelle): ?>
      <div class="item-2">
      <a href="<?php echo $stelle->url() ?>"><?php if($image = $stelle->images()->sortBy('sort', 'asc')->first()): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $stelle->title()->html() ?>" >
      <?php endif ?></a>
      <h2><a href="<?php echo $stelle->url() ?>">→ <?php echo $stelle->title()->html() ?></a></h2>
      <?php echo $stelle->titletwo()->kirbytext() ?>
      <p><a href="<?php echo $stelle->url() ?>">zur&nbsp;Stelle&nbsp;→</a></p>
      </div>
<?php endforeach ?>
</div>


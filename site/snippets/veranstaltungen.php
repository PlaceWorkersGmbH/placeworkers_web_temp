<div class="grid">
<?php foreach($page ->children()->visible() as $veranstaltung): ?>
      <div class="item-2">
      <a href="<?php echo $veranstaltung->url() ?>" style="border:0;">
      <?php if($image = $veranstaltung->images()->sortBy('sort', 'asc')->first()): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $veranstaltung->title()->html() ?>" >
      <?php endif ?>
      </a>
      <a href="<?php echo $veranstaltung->url() ?>"><h2 style="margin-bottom:0;"><?php echo $veranstaltung->title()->html() ?></h2></a>
      <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $veranstaltung->date('d/m/Y')?></p>
      <p><?php echo $veranstaltung->text()->excerpt(150) ?></p>
      <p><a href="<?php echo $veranstaltung->url() ?>">weiterlesen&nbsp;→</a></p>
      </div>
<?php endforeach ?>
</div>


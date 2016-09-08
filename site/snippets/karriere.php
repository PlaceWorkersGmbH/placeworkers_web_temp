<?php foreach(page('karriere')->children()->visible() as $unterseite): ?>
    <div class="grid border">
      <div class="icon">
      <?php if($image = $unterseite->images()->sortBy('sort', 'asc')->first()): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $unterseite->title()->html() ?>" >
      <?php endif ?>
      </div>
      <div class="item-2">
      <h2><a href="<?php echo $unterseite->url() ?>"><?php echo $unterseite->title()->html() ?></a></h2>
      <p><?php echo $unterseite->text()->excerpt(250) ?></p>
      <p><a href="<?php echo $unterseite->url() ?>">mehr&nbsp;erfahren&nbsp;→</a></p>
      </div>
    </div>
<?php endforeach ?>


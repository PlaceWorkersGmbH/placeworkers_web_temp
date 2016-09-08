<?php foreach($page ->children()->invisible() as $service): ?>
<div class="row">
<main class="main" role="main">
<div class="grid">
    <div class="item">
      <?php if($image = $service->images()->sortBy('sort', 'asc')->first()): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $service->title()->html() ?>">
      <?php endif ?>
    </div>
    <div class="item-3">
      <h1 style="margin-bottom:0;"><?php echo $service->title()->html() ?></h1>
      <p><?php echo $service->text()->excerpt(250) ?></p>
    </div>
</div>
</main>
</div>
<?php endforeach ?>

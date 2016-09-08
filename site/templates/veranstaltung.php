<?php snippet('header') ?>

  <main class="main" role="main">

  <h1 style="margin:0;"><?php echo $page->title()->html() ?></h1>

  <div class="grid">
    <div class="event-image">
      <p><?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>" >
      <?php endif ?></p>
      <p class="event-details"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $page->date('d/m/Y')?></p>
      <p class="event-details"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $page->time()->kirbytext() ?></p>
      <p class="event-details"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $page->location()->kirbytext() ?></p>
  </div>

    <div class="event-text">
      <p style="margin:0;"><?php echo $page->text()->kirbytext() ?></p>
    </div>
  </div>

      <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; vorherige</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">nächste &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

<?php snippet('footer') ?>

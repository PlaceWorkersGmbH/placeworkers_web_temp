<button id="trigger-overlay" type="button">Menü</button>

<div class="overlay cf overlay-slidedown" area-hidden="true">
  <button type="button" class="overlay-close">Schliessen</button>
  <nav>
    <ul>
      <?php foreach($pages->visible() as $p): ?>
        <li class="<?php if ($p->isOpen()) {
          echo("open");
        } ?>">
          <a href="<?php echo $p->url() ?>">
            <?php echo $p->title()->html() ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </nav>
</div>

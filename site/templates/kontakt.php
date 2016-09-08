<?php snippet('header') ?>

<main class="main cf" role="main" style="margin-bottom: 2em;">

  <h1><?php echo $page->title()->html() ?></h1>
  <?php echo $page->text()->kirbytext() ?>

  <div class="grid">
    <div class="item-3">
    <form method="post">

      <?php if($alert): ?>
      <div class="alert">
        <ul>
          <?php foreach($alert as $message): ?>
          <li><?php echo html($message) ?></li>
          <?php endforeach ?>
        </ul>
      </div>
      <?php endif ?>

      <div class="field">
        <label for="name">Name <abbr title="required">*</abbr></label>
        <input type="text" id="name" name="name">
      </div>

      <div class="field">
        <label for="email">E-Mail <abbr title="required">*</abbr></label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="field">
        <label for="text">Nachricht <abbr title="required">*</abbr></label>
        <textarea id="text" name="text" required></textarea>
      </div>

      <input type="submit" name="submit" value="Absenden" class="link">

    </form>
    </div>
    <div class="contact-item">
      <h2 style="margin-top:0;">Ihr Ansprechpartner</h2>
      <img src="../placeworkers.com/assets/images/oliver-kaluscha.png" />
      <p><?php echo $page->contact()->html() ?></p>
      <h3>Kontaktdaten</h3>
      <p>
        <?php echo $page->company()->html() ?><br>
        <?php echo $page->street()->html() ?><br>
        <?php echo $page->zip()->html() ?>
        <?php echo $page->location()->html() ?>
      </p>
      <p>Telefon: <a href="tel:+4964414450030"><?php echo $page->phone()->html() ?></a><br>
        Fax: <a href="tel:+4964414450039"><?php echo $page->fax()->html() ?></a><br>
        <a href="mailto:contact@placeworkers.com"><?php echo $page->mail()->html() ?></a></p>
    </div>
  </div>

</main>

  <div id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.6088659227894!2d8.495841316281965!3d50.56004338734223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bc5abedf592f21%3A0x68133bf18a61c4db!2sPlaceWorkers+GmbH!5e0!3m2!1sde!2sde!4v1458549865275&amp;iwloc=near" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

<?php snippet('footer') ?>

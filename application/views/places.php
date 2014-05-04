<header class="bar bar-nav">
  <h1 class="title">jaunt</h1>
</header>
<div class="content">
    <?php foreach($place as $row): ?>
      <div class="place">
          <div class="place__image">
            <img src="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg" alt="">
          </div>
          <div class="place__info content-padded">
              <h3 class="place__title"><?= $row->name ?></h3>
              <p class="place__address"><small><?= $response['result']['formatted_address'] ?></small></p>
              <?php if (isset($response['result']['website'])) { ?>
                <p class="place__site"><a href="<?= $response['result']['website'] ?>" target="_blank"><?= $response['result']['website'] ?></a></p>
              <?php } ?>
              <p class="place__note"><?= $row->note ?></p>
          </div>
      </div>
    <?php endforeach; ?>
</div>

<header class="bar bar-nav">
  <h1 class="title">Jaunt</h1>
</header>
<div class="content">
    <?php foreach($place as $row): ?>
      <div class="place">
          <div class="place__image">
            <img src="https://maps.googleapis.com/maps/api/place/photo?maxwidth=640&photoreference=<?= $photo_references[0] ?>&sensor=true&key=AIzaSyCsjrmFW0bjXRJfRaLZdukRmkxTKUxzT3I">
          </div>
          <div class="place__info content-padded">
              <h3 class="place__title"><?= $row->name ?></h3>
              <p class="place__address"><small><?= $response['result']['formatted_address'] ?></small></p>
              <?php if (isset($response['result']['website'])) { ?>
                <p class="place__site"><a href="<?= $response['result']['website'] ?>" target="_blank"><?= $response['result']['website'] ?></a></p>
              <?php } ?>
                <form class="input-group">
                  <div class="input-row input-row-textarea">
                    <textarea class="place__note" placeholder="Add a note about this place…"><?= $row->note ?></textarea>
                  </div>
                </form>
          </div>
      </div>
    <?php endforeach; ?>
</div>

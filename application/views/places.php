<header class="bar bar-nav">
  <h1 class="title">jaunt</h1>
</header>
<div class="content">
  <div class="content-padded">
    <img src="https://maps.googleapis.com/maps/api/place/photo?maxwidth=640&photoreference=<?= $photo_references[0] ?>&sensor=true&key=AIzaSyCsjrmFW0bjXRJfRaLZdukRmkxTKUxzT3I">
    <?php foreach($place as $row): ?>
      <h4><?= $row->name ?></h4>
      <small><?= $response['result']['formatted_address'] ?></small>
      <?php if (isset($response['result']['website'])) { ?>
        <a href="<?= $response['result']['website'] ?>" target="_blank"><?= $response['result']['website'] ?></a>
      <?php } ?>
      <p><?= $row->note ?></p>
    <?php endforeach; ?>
  </div>
</div>


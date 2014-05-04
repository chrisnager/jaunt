<header class="bar bar-nav jaunt-bar">
      <a class="pull-left" href="/add"><span class="icon icon-left"></span></a>
      <h1 class="title">Add a Place</h1>
</header>
<div class="content">
<form class="input-group" id="search">
  <div class="input-row input-row-search">
    <input type="text" name="query" placeholder="Search for a location…">
  </div>
</form>
  <?php if(isset($response)) { ?>
      <ul class="search-results table-view">
      <?php foreach ($response['results'] as $result): ?> 
        <li class="search-results__item table-view-cell media">
          <a href="/places/1" class="navigate-right">
            <?php if(isset($result['photos'])) { ?>
            <img class="media-object pull-left media-object--circle" src="https://maps.googleapis.com/maps/api/place/photo?maxwidth=640&photoreference=<?= $result['photos'][0]['photo_reference'] ?>&sensor=true&key=AIzaSyCsjrmFW0bjXRJfRaLZdukRmkxTKUxzT3I">
            <?php } else { ?>
            <img class="media-object pull-left media-object--circle" src="/apple-touch-icon-precomposed.png">
            <?php } ?>
            <div class="media-body">
              <?= $result['name'] ?>
              <p><?= $result['formatted_address'] ?></p>
            </div>
          </a>
        </li>
      <?php endforeach; ?>
      </ul>
  <?php } ?>
</div>

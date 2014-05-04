<header class="bar bar-nav jaunt-bar">
      <a class="pull-left" href="/add"><span class="icon icon-left"></span></a>
      <h1 class="title">Add a Place</h1>
</header>
<div class="content">
<form id="search"> 
    <input type="text" name="query" placeholder="Search for a location">
</form>
  <?php if(isset($response)) { ?>
    <ul>
      <?php foreach ($response['results'] as $result): ?> 
        <li>
          <?php if(isset($result['photos'])) { ?> 
            <img src="https://maps.googleapis.com/maps/api/place/photo?maxwidth=640&photoreference=<?= $result['photos'][0]['photo_reference'] ?>&sensor=true&key=AIzaSyCsjrmFW0bjXRJfRaLZdukRmkxTKUxzT3I">
          <?php } ?>
          <h4><?= $result['name'] ?></h4>
          <small><?= $result['formatted_address'] ?></small>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php } ?>
</div>

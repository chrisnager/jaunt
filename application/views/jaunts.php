<header class="bar bar-nav jaunt-bar">
	<span class="icon icon-bars pull-left"></span>
	<?php foreach($jaunt as $row): ?>
	<h1 class="title"><?= $row->jaunt_name ?></h1>
	<?php endforeach; ?>
	<a class="btn btn-outlined btn-teal pull-right" href="/permalink/1">Share</a>
</header>
<div class="content content--<?= $this->uri->rsegment(2) ?>">
	<ul class="table-view">
		<li class="table-view-cell media author-card">
			<a>
				<img class="media-object pull-left media-object--circle" src="https://scontent-b-iad.xx.fbcdn.net/hphotos-ash3/t1.0-9/1185556_10152172601436672_764383251_n.jpg">
				<div class="media-body">
					Clinton Halpin
					<p class="note">Bring your walking shoes. These are the best bars and sights in Downtown BKLYN!</p>
				</div>
			</a>
		</li>
		<?php foreach($jaunt as $row): ?>
		<li class="table-view-cell media">
			<a href="/places/<?= $row->id ?>" class="navigate-right">
					<?php if(isset($photo_references[0])) { ?> 
	                <img class="media-object pull-left media-object--circle" src="https://maps.googleapis.com/maps/api/place/photo?maxwidth=640&photoreference=<?= $photo_references[0] ?>&sensor=true&key=AIzaSyCsjrmFW0bjXRJfRaLZdukRmkxTKUxzT3I">
					<?php } else { ?>
					<img class="media-object pull-left media-object--circle" src="/apple-touch-icon-precomposed.png">
					<?php } ?>
				<div class="media-body">
					<?= $row->name ?>
					<p class="note"><img src="/webroot/img/ico_location.svg"><?= $row->note ?></p>
				</div>
			</a>
		</li>
		<?php endforeach; ?>
		<li class="table-view-cell media">
			<a href="/search" class="add-jaunt" data-transition="slide-in" href="/search">
				<div class="media-body">
					<span class="icon icon-plus"></span>
					Add New Place
				</div>
			</a>
		</li>
	</ul>
</div>

<div id="search" class="modal">
  <header class="bar bar-nav">
    <h1 class="title">Find a place</h1>
    <a href="/jaunts/1"><span class="icon icon-close pull-left btn-white"></span></a>
  </header>
  <div class="content">
   	<form class="input-group">
	  <div class="input-row input-row-search">
	    <input type="text" placeholder="Search places…">
	  </div>
	</form>
  </div>
</div>


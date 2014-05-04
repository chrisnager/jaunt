<div class="content content--<?= $this->uri->rsegment(2) ?>">
    <div class="permalink-jaunt__image">
        <img src="/webroot/img/home.png">
    </div>
    <div class="permalink-jaunt__name">
	    <?php foreach($jaunt as $row): ?>
				<h1><?= $row->jaunt_name ?></h1>
		<?php break; endforeach; ?>
		<div class="name__person">
			<img class="media-object pull-left media-object--circle" src="https://scontent-b-iad.xx.fbcdn.net/hphotos-ash3/t1.0-9/1185556_10152172601436672_764383251_n.jpg">
			<div class="media-body">
				Clinton Halpin
			</div>
		</div>
	</div>
	<ul class="table-view">
	<li class="table-view-cell media author-card">
			<a>
				<div class="media-body">
					Explore
					<p class="note">
						<?php foreach($jaunt as $row): ?>
						<?= $row->description ?>
						<?php break; endforeach; ?>
					</p>
				</div>
			</a>
	</li>
	</ul>
	
	<ul class="table-view">
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


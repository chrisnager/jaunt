<header class="bar bar-nav jaunt-bar">
	<?php foreach($jaunt as $row): ?>
	<h1 class="title"><?= $row->jaunt_name ?></h1>
	<?php endforeach; ?>
	<button class="btn btn-outlined btn-teal pull-right" href="#">Share</button>
</header>
<div class="content">
	<ul class="table-view">
		<?php foreach($jaunt as $row): ?>
		<li class="table-view-cell media">
			<a href="/places/<?= $row->id ?>" class="navigate-right">
				<img class="media-object pull-left media-object--circle" src="http://placehold.it/42x42">
				<div class="media-body">
					<?= $row->name ?>
					<p><?= $row->note ?></p>
				</div>
			</a>
		</li>
		<?php endforeach; ?>
		<li class="table-view-cell media">
			<a href="#search" class="add-jaunt" data-transition="slide-in" href="/search">
				<div class="media-body">
					<span class="icon icon-plus"></span>
					Add New Jaunt
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


<header class="bar bar-nav jaunt-bar">
	<?php foreach($jaunt as $row): ?>
	<h1 class="title"><?= $row->jaunt_name ?></h1>
	<?php break; endforeach; ?>
</header>
<div class="content">
    <div class="permalink-jaunt__image">
        <img src="/webroot/img/home.png">
    </div>
    <div class="permalink-jaunt__description">
	<?php foreach($jaunt as $row): ?>
        <?= $row->description ?>
	<?php break; endforeach; ?>
    </div>
	<ul class="table-view">
		<?php foreach($jaunt as $row): ?>
		<li class="table-view-cell media">
			<a href="/places/<?= $row->id ?>" class="navigate-right">
				<img class="media-object pull-left media-object--circle" src="/webroot/img/ico_bar.svg">
				<div class="media-body">
					<?= $row->name ?>
					<p><?= $row->note ?></p>
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


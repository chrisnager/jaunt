<header class="bar bar-nav jaunt-bar">
      <h1 class="title">Clints New York Trip</h1>
      <a class="pull-right" href="/">Share</a>
</header>
<div class="content">
	<ul class="table-view">
	  <?php foreach($jaunt as $row): ?>
      <li class="table-view-cell media">
	      <a class="navigate-right">
        <img class="media-object pull-left" src="http://placehold.it/42x42">
	      <div class="media-body">
	        <?= $row->name ?>
	        <p><?= $row->note ?></p>
	      </div>
	    </a>
	  </li>
  <?php endforeach; ?>
	</ul>
	<a data-transition="slide-in" href="/search" class="btn btn-block">Add</button>
</div>



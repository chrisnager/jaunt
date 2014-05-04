<header class="bar bar-nav">
  <h1 class="title">jaunt</h1>
</header>
<div class="content">
  <div class="content-padded">
  <?php foreach($place as $row): ?>
  <h4><?= $row->name ?></h4>
  <?php endforeach; ?>
  </div>
</div>


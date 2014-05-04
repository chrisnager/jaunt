<header class="bar bar-nav">
  <h1 class="title">jaunt</h1>
</header>
<div class="content">
  <div class="content-padded">
    <?php foreach($place as $row): ?>
      <h4><?= $row->name ?></h4>
      <p><?= $row->note ?></p>
    <?php endforeach; ?>
  </div>
</div>


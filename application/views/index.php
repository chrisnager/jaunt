<div class="content content--<?= $this->uri->rsegment(2) ?>">
	<img class="logo" src="/webroot/img/logo.svg">
	<div class="content-padded">
		<div class="hero">
			<h1><i>&nbsp;Jaunt.</i> Let your friends be your city guides.</h1>
			<a class="btn  btn-white  btn-padded  btn-block  btn-outlined btn-pill"  href="#add" class="btn">Add a new Jaunt</a>
		</div>
	 </div>
</div>
<nav class="bar bar-tab bar-tab--transparent">
	<a class="tab-item" href="#">
		<span class="tab-label">Login</span>
	</a>
	<a class="tab-item" href="#">
		<span class="tab-label">Sign Up</span>
	</a>
</nav>

<div id="add" class="modal">
  <header class="bar bar-nav">
    <a href="/"><span class="icon icon-close pull-left btn-white"></span></a>
    <h1 class="title">Add a Jaunt</h1>
    <a href="/search/prospect%20park"><span class="icon icon-right-nav pull-right"></span></a>
  </header>
  <div class="content">
   	<form class="input-group">
   	  <label>Name</label>
	  <div class="input-row">
	    <input type="text" placeholder="An awesome city trip...">
	  </div>
	  <label>Description</label>
	  <div class="input-row input-row-textarea">
	    <textarea placeholder="Lots of walking, sight seeing..."></textarea>
	  </div>
	</form>
  </div>
</div>

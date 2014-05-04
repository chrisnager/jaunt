<div class="content">
	<img class="logo" src="/webroot/img/logo.svg">
	<div class="content-padded">
		<div class="hero">
			<h1><i>Jaunt.</i> Let your friends be your city guides	</h1>
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
    <a href="/search"><span class="icon icon-right-nav pull-right"></span></a>
    <!-- <button class="btn btn-outlined btn-teal pull-right" href="#search">Next</button> -->
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

<div id="search" class="modal">
  <header class="bar bar-nav">
    <h1 class="title">Find a place</h1>
  </header>
  <div class="content">
   	<form class="input-group">
	  <div class="input-row input-row-search">
	    <input type="text" placeholder="Search places…">
	  </div>
	</form>
  </div>
</div>

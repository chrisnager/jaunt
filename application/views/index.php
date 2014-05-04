<div class="content">
	<img class="logo" src="/webroot/img/logo.svg">
	<div class="content-padded">
		<div class="hero">
			<h1><i>Jaunt</i>, A list of awesome places in your city.</h1>
			<a class="btn  btn-white  btn-padded  btn-block  btn-outlined"  href="#add" class="btn">Create a new list</a>
		</div>
	 </div>
</div>
<nav class="bar bar-tab">
	<a class="tab-item active" href="#">
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
    <button class="btn btn-outlined btn-teal pull-right" href="#search">Next</button>
  </header>
  <div class="content">
   	<form class="input-group">
	  <div class="input-row">
	    <input type="text" placeholder="Name your place…">
	  </div>
	  <div class="input-row input-row-textarea">
	    <textarea placeholder="Description"></textarea>
	  </div>
	</form>
  </div>
</div>

<div id="search" class="modal">
  <header class="bar bar-nav">
    <h1 class="title">New Location</h1>
  </header>
  <div class="content">
   	<form class="input-group">
	  <div class="input-row">
	    <input type="text" placeholder="Search">
	  </div>
	</form>
  </div>
</div>

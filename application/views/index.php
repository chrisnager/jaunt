<header class="bar bar-nav">
    <h1 class="title">Jaunt</h1>
</header>
<div class="content">
    <a class="btn  btn-white  btn-padded  btn-block  btn-outlined"  href="#add" class="btn">Create a Jaunt</a>
</div>


<div id="add" class="modal">
  <header class="bar bar-nav">
    <h1 class="title">Add a Jaunt</h1>
    <a class="pull-right" href="#search"><span>Next</span></a>
  </header>
  <div class="content content--nobg">
   	<form class="input-group">
	  <div class="input-row">
	    <input type="text" placeholder="Name your place...">
	  </div>
	  <div class="input-row">
	    <input type="email" placeholder="Add a Description...">
	  </div>
	</form>
  </div>
</div>

<div id="search" class="modal">
  <header class="bar bar-nav">
    <h1 class="title">Search</h1>
  </header>
  <div class="content content--nobg">
   	<form class="input-group">
	  <div class="input-row">
	    <input type="text" placeholder="Search">
	  </div>
	</form>
	<a data-transition="slide-in" href="/jaunts" class="btn btn-block">Add</a>
  </div>
</div>




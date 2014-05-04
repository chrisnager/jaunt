<header class="bar bar-nav">
    <h1 class="title">Jaunt</h1>
</header>
<div class="content">
    <div class="content-padded">
        <a class="btn  btn-white  btn-padded  btn-block  btn-outlined" href="#add">Add a Jaunt</a>
        <a class="btn  btn-white  btn-padded  btn-block  btn-outlined" href="/find">Find a Jaunt</a>
    </div>
</div>


<div id="add" class="modal">
  <header class="bar bar-nav">
    <h1 class="title">Add a Jaunt</h1>
  </header>
  <div class="content content--nobg">
   	<form class="input-group">
	  <div class="input-row">
	    <label>Name</label>
	    <input type="text" placeholder="">
	  </div>
	  <div class="input-row">
	    <label>Description</label>
	    <input type="email" placeholder="">
	  </div>
	</form>
    <div class="content-padded">
	    <a data-transition="slide-in" href="#search" class="btn btn-block">Next</a>
    </div>
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
	<a data-transition="slide-in" href="/jaunt" class="btn btn-block">Add</a>
  </div>
</div>




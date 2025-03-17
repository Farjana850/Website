<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans$display=swap" rel="stylesheet">
  
</head>
<body>                    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Devdash Corner</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hari.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Samsung Biswas</h3>
        <p>Hacked NASA Using HTML!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/mang.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Daffodil Kausik</h3>
        <p>Started his own Salone!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chill.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chinu Rangpur</h3>
        <p>Bought a boat but it works on soil only !</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	
	<div class="py-5">
		<h2 class="text-center">About us</h2>
	</div>

	<div class="container-fluid aboutimg">

	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/fail.jpg" class="img-fluid">
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<h2>We are failures </h2>
			<p class="py-3">
				Blah Blah Blah .............
			</p>

			<a href="about.php" class="btn btn-success">check more</a>
	</div>





</section>
</div>

<section class="my-5">
	
	<div class="py-5">
		<h2 class="text-center">Our services</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-lg-4 col-lg-12">
				<div class="card" >
  <img class="card-img-top" src="images/depression.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Overcome Depression</h4>
    <p class="card-text">Get demotivations from us.</p>
    <a href="#" class="btn btn-primary">Check more</a>
  </div>
</div>
			</div>
		</div>
	</div>



			<div class="col-lg-4 col-lg-4 col-lg-12">
				<div class="card" >
  <img class="card-img-top" src="images/ano.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Get hands on work</h4>
    <p class="card-text">Start working .</p>
    <a href="#" class="btn btn-primary">Check more</a>
  </div>
</div>
			</div>
		</div>
	</div>

</section>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Gallery</h2>
	</div>
	<div class="w-50 ml-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label><b>Username</b></label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label><b>Email Id</b></label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label><b>Mobile Number</b></label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label><b>Comments</b></label>
				<textarea class="form-control" name="comments">
					
				</textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>

</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@failureProduction</p>
	</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



	</body>
	</html>
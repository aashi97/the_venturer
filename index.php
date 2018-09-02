<!DOCTYPE html>
<html>
<head>
	<title>
		The Venturer
	</title>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">The Venturer</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item" onclick="postToggle();">
	        <a class="nav-link" href="#">New Post <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	    <form class="form-inline">
	    	<?php
	    	session_start();
	    	 if(isset($_SESSION['email'])) {
	    		echo "<button type=\"button\" class=\"btn btn-outline-success\" onclick=\"logoutPage()\">Logout</button>";
	    	}
	    	else {
	    		echo "<button type=\"button\" class=\"btn btn-outline-success\" onclick=\"loginPage()\">Login</button>";
	    	} ?>
	    </form>
	  </div>
	</nav>

	<section class="new-post-wrapper">
		<div class="new-post">
			<div class="new-post-text">
				<h1>New Post</h1>
			</div>
			<form id="new-post-form" name="new-post-form" method="post" action="newpost.php" enctype="multipart/form-data">
				<div class="form-group">
					<label for="post-title">Title:</label>
    				<input type="text" class="form-control" name="title" id="post-title" placeholder="Title">
				</div>
				<div class="form-group">
					<label for="post-text">Text:</label>
    				<input type="text" class="form-control" name="text" id="post-text" placeholder="Text">
				</div>
				<div class="form-group">
					<label for="post-title">Photo:</label>
    				<input type="file" class="form-control" accept="image/*" name="photo" id="post-photo" placeholder="Photo">
				</div>
				<div class="submit-btn">
					<button type="submit" class="btn btn-outline-success">Submit</button>
					<button type="button" onclick="postToggle()" class="btn btn-outline-success">Close</button>
				</div>
				
			</form>
		</div>
	</section>

	<section class="banner-wrapper">
		<div class="banner">
			<div class="banner-text">
				<h1>Like all great travellers,</h1>
				<h3>I have seen more than I remember,</h3>
				<h3>and remember more than I have seen.</h3>
			</div>
		</div>
	</section>
	<section class="main container-fluid">
		<div class="row">
			<div class="col-sm-9">
				<div class="blog-post">
					<div class="blog-title">
						<h1>Italy</h1>
					</div>
					<div class="blog-img">
						<img src="images\rome.jpg" width="100%">
					</div>
					<div class="blog-text">
						<p>The Colosseum or Coliseum, also known as the Flavian Amphitheatre (Latin: Amphitheatrum Flavium; Italian: Anfiteatro Flavio or Colosseo , is an oval amphitheatre in the centre of the city of Rome, Italy. Built of travertine, tuff, and brick-faced concrete,it is the largest amphitheatre ever built. The Colosseum is situated just east of the Roman Forum. Construction began under the emperor Vespasian in AD 72,and was completed in AD 80 under his successor and heir Titus.Further modifications were made during the reign of Domitian (81–96).These three emperors are known as the Flavian dynasty, and the amphitheatre was named in Latin for its association with their family name (Flavius).
						In recent years the Colosseum has become a symbol of the international campaign against capital punishment, which was abolished in Italy in 1948. Several anti–death penalty demonstrations took place in front of the Colosseum in 2000. Since that time, as a gesture against the death penalty, the local authorities of Rome change the color of the Colosseum's night time illumination from white to gold whenever a person condemned to the death penalty anywhere in the world gets their sentence commuted or is released, or if a jurisdiction abolishes the death penalty. Most recently, the Colosseum was illuminated in gold in November 2012 following the abolishment of capital punishment in the American state of Connecticut in April 2012. </p>
					</div>
					<div class="blog-button">
						<button type="button" class="btn btn-outline-success">Read More</button>
					</div>
				</div>
				<div class="blog-post">
					<div class="blog-title">
						<h1>Paris</h1>
					</div>
					<div class="blog-img">
						<img src="images\paris.jpg" width="100%">
					</div>
					<div class="blog-text">
						<p>More than 250 million people have visited the tower since it was completed in 1889.In 2015, there were 6.91 million visitors.The tower is the most-visited paid monument in the world.An average of 25,000 people ascend the tower every day which can result in long queues.
						The tower has two restaurants: Le 58 Tour Eiffel on the first level, and Le Jules Verne, a gourmet restaurant with its own lift on the second level. This restaurant has one star in the Michelin Red Guide. It is run by the multi-Michelin star chef Alain Ducasse and owes its name to the famous science-fiction writer Jules Verne. Additionally, there is a champagne bar at the top of the Eiffel Tower </p>
					</div>
					<div class="blog-button">
						<button type="button" class="btn btn-outline-success">Read More</button>
					</div>
				</div>
				<div class="blog-post">
					<div class="blog-title">
						<h1>Agra</h1>
					</div>
					<div class="blog-img">
						<img src="images\tajmahal.jpg" width="100%">
					</div>
					<div class="blog-text">
						<p>The Taj Mahal attracts a large number of tourists. UNESCO documented more than 2 million visitors in 2001, which had increased to about 7–8 million in 2014.A two-tier pricing system is in place, with a significantly lower entrance fee for Indian citizens and a more expensive one for foreigners. Most tourists visit in the cooler months of October, November and February. Polluting traffic is not allowed near the complex and tourists must either walk from parking lots or catch an electric bus. The Khawasspuras (northern courtyards) are currently being restored for use as a new visitor centre.
						
						The small town to the south of the Taj, known as Taj Ganji or Mumtazabad, was originally constructed with caravanserais, bazaars and markets to serve the needs of visitors and workmen.Lists of recommended travel destinations often feature the Taj Mahal, which also appears in several listings of seven wonders of the modern world, including the recently announced New Seven Wonders of the World, a recent poll with 100 million votes.

						 </p>
					</div>
					<div class="blog-button">
						<button type="button" class="btn btn-outline-success">Read More</button>
					</div>
				</div>
				<div class="blog-post">
					<div class="blog-title">
						<h1>First Post</h1>
					</div>
					<div class="blog-img">
						<img src="images\sevenwonders.jpg" width="100%">
					</div>
					<div class="blog-text">
						<p>asdkjhf alksjd hflkjashf lkajhds flkjah dflkjhasd flkjhas dlfkjhasdlkfjh asldkjhf alksdjhf laksjhf lkajsh dfkljahds flkah sdfkljhas dflkjh asdlkfjh asldkjfh alskdjhf laksjdhf laksjhf laksjhf lkajhds flkjah dflkjhasd flkjhas dlfkjhasdlkfjh asldkjhf alksdjhf laksjhf lkajsh dfkljahds flkah sdfkljhas dflkjh asdlkfjh asldkjfh alskdjhf laksjdhf laksjhf laksjhf lkajhds flkjah dflkjhasd flkjhas dlfkjhasdlkfjh asldkjhf alksdjhf laksjhf lkajsh dfkljahds flkah sdfkljhas dflkjh asdlkfjh asldkjfh alskdjhf laksjdhf laksjhf laksjhf lkajhds flkjah dflkjhasd flkjhas dlfkjhasdlkfjh asldkjhf alksdjhf laksjhf lkajsh dfkljahds flkah sdfkljhas dflkjh asdlkfjh asldkjfh alskdjhf laksjdhf laksjhf laksjhf lkajhds flkjah dflkjhasd flkjhas dlfkjhasdlkfjh asldkjhf alksdjhf laksjhf lkajsh dfkljahds flkah sdfkljhas dflkjh asdlkfjh asldkjfh alskdjhf laksjdhf laksjhf laksjhf lkajhds flkjah dflkjhasd flkjhas dlfkjhasdlkfjh asldkjhf alksdjhf laksjhf lkajsh dfkljahds flkah sdfkljhas dflkjh asdlkfjh asldkjfh alskdjhf laksjdhf laksjhf laksjhf lkajhds flkjah dflkjhasd flkjhas dlfkjhasdlkfjh asldkjhf alksdjhf laksjhf lkajsh dfkljahds flkah sdfkljhas dflkjh asdlkfjh asldkjfh alskdjhf laksjdhf laksjhf laksjhf </p>
					</div>
					<div class="blog-button">
						<button type="button" class="btn btn-outline-success">Read More</button>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				
			</div>
		</div>
	</section>
  	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
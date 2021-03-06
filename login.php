<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="index.php">The Venturer</a>
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
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>

	<?php
	session_start();
	if(isset($_SESSION['email'])) {
		echo "click to <a href='logout.php'>logout</a> and to go <a href='index.php'>back</a>";
	}
	else {
		echo "<section class='login-wrapper'>
		<div class='login'>
			<div class='login-text'>
				<h1>Login</h1>
			</div>
			<form id='login-form' name='login-form' method='post' action='userlogin.php'>
				<div class='form-group'>
					<label for='log-email'>Email address:</label>
    				<input type='email' class='form-control' name='email' id='log-email' placeholder='Email Address'>
				</div>
				<div class='form-group'>
					<label for='log-pass'>Password:</label>
    				<input type='password' class='form-control' name='pass' id='log-pass' placeholder='Password'>
				</div>
			</form>
			<form id='register-form' name='register-form' method='post' action='userregister.php'>
				<div class='form-group'>
					<label for='fullname'>Full Name:</label>
    				<input type='text' class='form-control' name='fullname' id='fullname' placeholder='Fullname'>
				</div>
				<div class='form-group'>
					<label for='reg-email'>Email address:</label>
    				<input type='email' class='form-control' name='email' id='reg-email' placeholder='Email Address'>
				</div>
				<div class='form-group'>
					<label for='reg-pass'>Password:</label>
    				<input type='password' class='form-control' name='pass' id='reg-pass' placeholder='Password'>
				</div>
			</form>
			<div class='login-btn'>
				<button type='button' class='btn btn-outline-success' onclick='formToggle();' id='register-btn'>Register</button>
				<button type='button' class='btn btn-outline-success' onclick='submitForm();' id='submit-btn'>Submit</button>
			</div>
		</div>
	</section>";
	}

	?>
	


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
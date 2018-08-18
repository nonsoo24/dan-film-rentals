<?php


if (isset($_POST['sub'])) {
  $email = $_POST['inputEmail'];
  $fname = $_POST['inputFullname'];
  $message = $_POST['inputMessage'];
  

		$file_open = fopen("contactform.csv", "a");
		$no_rows = count(file("contactform.csv"));
		if($no_rows > 1)
		{
			$no_rows = ($no_rows - 1) + 1;
		}
		$form_data = array(
		
			'email'		=>	$email,
			'name'		=>	$fname,
			'message'	=>	$message
		);
		fputcsv($file_open, $form_data);
		$error = '<label class="text-success">Thank you for contacting us</label>';
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
	}


?>


<!DOCTYPE html>

<html lang="en">

<head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dan-Film-Rentals</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">


</head>

               
<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">Dan Film Rentals  <img src="img/logo.png" alt="logo" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="movies.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Movies
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="movies.php">Action</a>
          <a class="dropdown-item" href="movies.php">Romance</a>
           <a class="dropdown-item" href="movies.php">Comedy</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="movies.php">Others</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<p id="#films">&nbsp;</div>
<p id="#films">&nbsp;</div>
<p id="#films">&nbsp;</div>
<p id="#films">&nbsp;</div>
<p id="#films">&nbsp;</div>

<body>

	<div class="container">
	<h1 style="text-align: center; color: black; background-color: white;"> Thank you for reaching out. <br> We'll get back to you shortly</h1>

</body>


<p id="#films">&nbsp;</div>
<p id="#films">&nbsp;</div>
<p id="#films">&nbsp;</div>
<p id="#films">&nbsp;</div>
<p id="#films">&nbsp;</div>
<p id="#films">&nbsp;</div>


<div class="bottom">
        
            <ul>
                 <a href="news.php"><li>Subscribe to Newsletter</li></a>
                 <a href="#"><li>Blog </li></a>
                <a href="#"><li>Services</li></a>
                
            </ul>
  </div>
       

 
        <footer style="background-color: black">
             <p>&copy;2018 Dan Film Rentals</p>
        </footer>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script> 

</html>
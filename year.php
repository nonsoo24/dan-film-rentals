 <!DOCTYPE html>

<html lang="en">

<head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Week 7 Assignment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css">
       <link rel="stylesheet" type="text/css" href="css/bootstrap.css">



</head>


              
<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">
<<<<<<< HEAD
  <a class="navbar-brand" href="#">Dan Film Rentals  <img src="img/logo.png" alt="logo" class="logo"></a>
=======
  <a class="navbar-brand" href="index.html">Dan Film Rentals  <img src="img/logo.png" alt="logo" class="logo"></a>
>>>>>>> a06dcb6e168c3d23b25ba67734c7b02cb3e417ad
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.html">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="movies.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Movies
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="movies.html">Action</a>
          <a class="dropdown-item" href="movies.html">Romance</a>
           <a class="dropdown-item" href="movies.html">Comedy</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="movies.html">Others</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<main>
	<p id="#films">&nbsp;</div>

<div class="container">
  <div  class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to Dan Film Rentals</h1>
    <p class="lead">We bring you Latest movies.</p>
  <hr class="my-4">
  <p>We stock a wide range of quality movies at affordable rates for rents. This unique quality made us top 2 out of 100 movie platforms.</p>
  <a class="btn btn-primary btn-lg" href="index.html" role="button">Home</a>
  </div>
</div>  


<p style="color: white;">

	<?php  
		

	
		$start_year = 1980; 
		$end_year = 2018; 
		$leap_year_count = 0; 

		
		for ($i=$start_year; $i <= $end_year; $i++) { 
			if ((($i % 4) === 0 && ($i % 100) !== 0 ) || ($i % 400) === 0 ){
				$leap_year_count = $leap_year_count + 1;
				echo "$i is a leap year" . "<br>";
			} else {
				echo "$i"."<br>";
			}
		} 
		echo "The count of leap years ranging from $start_year to $end_year is ". $leap_year_count;
		?>

</p>	


</main>

		<div class="bottom" style="background-color: #17182B;">
        
            <ul>
                 <a href="#"><li>Connect </li></a>
                 <a href="#"><li>Blog </li></a>
                <a href="#"><li>Services</li></a>
                
            </ul>
  </div>
       


 
        <footer>
             <p>&copy;2018 Dan Film Rentals</p>
        </footer>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script> 

</body>



</html>
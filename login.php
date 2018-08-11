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


<body>
       


    <p id="#films">&nbsp;</div>


       

<div class="login-page">  
  <div class="form">
  <form>
    <div class="form-group">
    <label for="exampleInputUsername">Username</label>
    <input type="email" class="form-control" id="exampleInputUsername" aria-describedby="emailUsername" placeholder="username">
    <small id="username_error" class="form-text flag-error"></small>
    </div>

    <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword" aria-decribedby="emailPassword" placeholder="password">
    <small id="password_error" class="form-text flag-error"></small>
    </div>

    <div class="form-group">
    <span id="submitForm" class="btn btn-primary">Login</span>
    </div>
     
    <p>Click Register to display Register Form</p>
    <p class="message">Not Registered? <a href="#">Register</a></p>
  </form>

  <form class="registeration-form" method="POST" action="details.php">
    <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="email" class="form-control" name="ema"   placeholder="Enter email">
    <small id="email_error" class="form-text flag-error"></small>
    </div>

    <div class="form-group">
    <label for="exampleInputFullname">Full-name</label>
    <input type="text" class="form-control" name="nam"   placeholder="Enter full-name">
    <small id="fullname_error" class="form-text flag-error"></small>
    </div>

    <div class="form-group">
    <label for="exampleInputUsername">Username</label>
    <input type="text" class="form-control" name="user"   placeholder="Enter Username">
    <small id="username_error" class="form-text flag-error"></small>
    </div>

   <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="text" class="form-control" name="pas"   placeholder="Password">
    <small id="password_error" class="form-text flag-error"></small>

    <div class="form-group">
    <label for="exampleInputPasswordd">Confirm Password</label>
    <input type="text" class="form-control" name="passwordd"   placeholder="Password">
    <small id="passwordd_error" class="form-text flag-error"></small>
    
    <div class="form-group">
    <button name="sub" type="submit" class="btn btn-primary">Create Account</button>
    </div>
      
    <p>Click Login to display Login Form</p>
    <p class="message">Already Registered? <a href="#">Login</a></p>
  </form>
  </div>
</div> 


 <p id="#films">&nbsp;</div>
  <p id="#films">&nbsp;</div>


   
 
       <div class="bottom" style="background-color: #17182B;">
        
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


<script type="text/javascript">
$('.message a').click(function(){
$('form').animate({height: "toggle", opacity: "toggle"}, "slow")
});

$('#submitForm').click(function( event ){

  var userName = $('#exampleInputUsername').val();
  var fullName = $('#exampleInputFullname').val();
  var emailAddress = $('#exampleInputEmail').val();
  var password = $('#exampleInputPassword').val();
  var passwordd = $('#exampleInputPasswordd').val();



  if (userName === "") {
    $('#username_error').text('Username is required');
  } else {
    $('#username_error').text('');
  }

  if (fullName === "") {
    $('#fullname_error').text('Please enter your username or full name');
  } else {
    $('#fullname_error').text('');
  }

  if (emailAddress === "") {
    $('#email_error').text('Please enter your email address');
  } else {
    $('#email_error').text('');
  }

  if (password === "") {
    $('#password_error').text('Password is required')
  } else {
    $('#password_error').text('');
  }

  if (passwordd === "") {
    $('#passwordd_error').text('Please confirm your password')
  } else {
    $('#passwordd_error').text('');
  }

}); 
</script>
         

</body>



</html>
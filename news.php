

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
  <a class="navbar-brand" href="index1.php">Dan Film Rentals  <img src="img/logo.png" alt="logo" class="logo"></a>
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
  <p id="#films">&nbsp;</div>
     <p id="#films">&nbsp;</div>


<div class="container" style="background-color: white">
  <br>
  <br>
    
    <h1 style="text-align: center; color: black;">Subscribe to Newsletter</h1>

 <div class="container">    
    <form method="POST" action="email.php">
    <div class="form-group">
    
 <div class="form-group">
    <label for="inputFullname"><strong>First Name*</strong></label>
    <input type="name" class="form-control" id="inputFullname" aria-describedby="emailFullname" name="inputFullname" placeholder="Enter full-name">
    <small id="fullname_error" class="red-text flag-error"></small>
  </div>

  <label for="inputEmail"><strong>Email address*</strong></label>
    <input type="email" class="form-control" id="inputEmail" aria-describedby ="emailHelp" name="inputEmail" placeholder="Enter email">
    <small id="email_error" class="red-text flag-error"></small>
  </div>

  <button name="sub" id="submitForm" class="btn btn-primary">Send</button>

      <p id="#films">&nbsp;</div>
  <p id="#films">&nbsp;</div>
  </form>
</section>
</div>
</div>

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



</body>

<script type="text/javascript">

$('#submitForm').click(function() {

  var fullName = $('#inputFullname').val();
  var emailAddress = $('#inputEmail').val();
  

  
if(fullName === "") {
    $('#fullname_error').text("Please enter your Full Name");
  } else {
    $('#fullname_error').text("");
  }

   if(emailAddress === "") {
    $('#email_error').text("Please enter your Email Address");
  } else {
    $('#email_error').text("");
  }


  if(fullName !== "" && emailAddress !== "") {

    var formValues = {

        fullName: fullName,
        emailAddress: emailAddress,
       
    };

      console.log(formValues);
  }

    return false;



});

</script>


</html>

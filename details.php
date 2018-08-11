<?php
    session_start();
    // DATABASE HOST NAME
    define('DBHOST', 'db4free.net:3306');
    // DATABASE NAME
    define('DBNAME', 'chukwurah');
    // DATABASE USER NAME
    define('DBUSER', 'nonsoo');
    // DATABASE PASS
    define('DBPASS', 'daniel1994');
    
    //Connect to database
     $connect = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if(!$connect){
        die("Could not connect to database ".mysqli_error($connect));
    }
    //Select database
    $select_db = mysqli_select_db($connect, nonsoo);
    if(!$select_db){
        die("Could not select database ".mysqli_error($connect));
    }
if (isset($_POST['sub'])) {
    
    $ema=$_POST['ema'];
    $nam=$_POST['nam'];
    $user=$_POST['user'];
    $pas=$_POST['pas'];
    
    
    $sql = "INSERT INTO users (email,fullname,user,password) VALUES ('$ema','$nam','$user','$pas')";
    $result=mysqli_query($connect, $sql);
      $error = '<label class="text-success">Thank you for signing up</label>';
}
else{
    $error = '<label class="text-success">Please try again</label>';
}
?>
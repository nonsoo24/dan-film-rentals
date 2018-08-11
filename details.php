<?php
    session_start();
    // DATABASE HOST NAME
   $host='db4free.net:3306';
    // DATABASE NAME
    $username='root';
    // DATABASE USER NAME
    $password='daniel1994';
    // DATABASE PASS
    $databaseName='nonsoo';
    
    //Connect to database
    $connect = mysqli_connect($host, $username, $password);
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
<?php
session_start();
$connection=new mysqli("localhost","root","","user");   //create connection 
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());    //check connection
}


$email=$_POST["email"];
$password=$_POST["password"];
$sql="SELECT * FROM user_info where email='$email' AND password='$password'";
$result=mysqli_query($connection,$sql);
$r=mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
 if($count == 1)
{
    
     $_SESSION['id']=$r['id'];
     
     $_SESSION['email']=$r['email'];
     
     $_SESSION['firstname']=$r['firstname'];

    
    header('location:main.php');
}
else
{
    $_SESSION['error']="email/Password is incorrect!";
   
    header('location:login.php');
    
}
?>


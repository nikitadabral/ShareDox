<?php
 session_start();
    $connection=new mysqli("localhost","root","","user");   //create connection 
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());    //check connection
}

    
    $id=$_SESSION['id'];
$sql= "update user_info set is_active='off' where id='$id'";
    $result=mysqli_query($connection,$sql);




session_unset();
// Finally, destroy the session.    
session_destroy();

// Include URL for Login page to login again.
header("Location: login.php");
exit;
?>
<?php

$connection=new mysqli("localhost","root","","user");   //create connection 
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());    //check connection
}

else
{
echo "";
}

$fname=$_POST["fname"];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['psw'];
$cpassword=$_POST['cpassword'];


$sql = "INSERT INTO user_info(firstname, lastname,email, password)
VALUES ('$fname', '$lname','$email' ,'$password')";


  if (filter_var($email, FILTER_VALIDATE_EMAIL===false)) {
     echo "Invalid email format"; 
  }

  if ($password !== $cpassword) {
      
       echo "Sorry unable to sign up!  Password and confirm password fields do not match!";
      
  }
else{
    if (mysqli_query($connection, $sql)) {
    echo "New record created successfully";
    
    header("location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
}



mysqli_close($connection);
?>
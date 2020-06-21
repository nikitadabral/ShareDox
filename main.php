<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Homepage</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
   <body>
    
<div class="container mt-3">
    <?php

    session_start();
    
    if (isset($_SESSION['email']))  ?>

    <img src="avatars/graphic-3715443_1280.png" width="50px" height="50px"></img>
    <p class="lead">  <?php echo $_SESSION['email'];?>  <a href="logout.php"  class="float-right btn btn-danger">  Logout   </a>  </p>

    
    <?php if (!isset($_SESSION['email'])){header('location:login.php');}?>
    <?php 

    $connection=new mysqli("localhost","root","","user");   //create connection 
    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());    //check connection
    }


    $id=$_SESSION['id'];
    $sql= "update user_info set is_active='on' where id='$id'";
    $result=mysqli_query($connection,$sql);
    ?>
    <div class="jumbotron">
      <h1 class="display-4">Hello, <?php echo $_SESSION["firstname"]; ?></h1>
      <p class="lead">This is ShareDox , a simple document collabration website to edit your articles,reports .,etc together with the team.</p>
      <hr class="my-4">
      <p>It has a public repository and you are free to collabrate.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Github Repo</a>
    </div>
    
    <div id="document_list" >
    
    <a href="doc1.php"  class="btn btn-primary"> 
    Document 1
    </a> 
    <a href="doc2.php"  class="btn btn-primary"> 
    Document 2
    </a> 
    </div>
</div>



</body>
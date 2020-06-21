<!doctype html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Homepage</title>

 <?php session_start(); if (!isset($_SESSION['email'])){header('location:login.php');}?>

<div class="container"> 
<?php
    
    

    if (isset($_SESSION['email']))  ?>
    
    <img src="avatars/graphic-3715443_1280.png" width="50px" height="50px"></img>
			<p class="lead"> 
                Welcome <?php echo $_SESSION['firstname'];?> 
			</p>
                    
 
<?php 
   
    $connection=new mysqli("localhost","root","","user");   //create connection 
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());    //check connection
}

    
    $id=$_SESSION['id'];
$sql= "update user_info set is_active_doc1='on', is_active_doc2='off' where id='$id'";
    $result=mysqli_query($connection,$sql);
    ?>
			
				<a href="logout.php"  class="float-right btn btn-danger"> 
					Logout 
				</a> 
	 
		
	</div> 
<script type="text/javascript">
    function saveEdits() {
   
  
  //get the editable element
  var editElem = document.getElementById("edit");
  
  //get the edited element content
  var userVersion = editElem.innerHTML;
  //save the content to local storage
  localStorage.userEdits1 = userVersion;
  //write a confirmation to the user
    
  document.getElementById("update").innerHTML="Edits saved!";

}

function checkEdits() {
  //find out if the user has previously saved edits
  if(localStorage.userEdits!=null)
    document.getElementById("edit").innerHTML = localStorage.userEdits1;
}
    
 
</script>
<style>
    .container{
        
    }
    #otheruser{
        display: flex;
        flex-direction: row;
        background-color: white;
    }
    .circle{
        display: flex;
        justify-content:center;
        align-items: center;
        border: 5px black;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: yellow;
        font-family: sans-serif;
        font-size: 200%;
               
    }
    
    .circle .tooltiptext {
        
     visibility: hidden;
        
      width: 100px;
      background-color: black;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 2px 0;
      font-size: 12px;
      /* Position the tooltip */
      position: absolute;
      z-index: 1;
}
    .circle:hover .tooltiptext {
  visibility: visible;
}
    .main_text{
        height: 50vh;
        width:50vw;
        border: 2px black;
    }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body onload="checkEdits()">
<div class="container">
<div id="otheruser">
<?php

    $connection=new mysqli("localhost","root","","user");   //create connection 
    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());    //check connection
    }
    
    $sql= "select * from user_info where is_active_doc1='on'";
    $result=mysqli_query($connection,$sql);
    //$r=mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)) {
    $fullname= $row['firstname'].' '.$row['lastname'];
?>
<div class='circle'><?php echo $row['firstname'][0];  ?>  <span class="tooltiptext"><?php echo "$fullname\n" ;echo $row['email'];?></span> </div>

<?php } ?>
</div>
<div class="main_text mt-2" style="border:3px solid black;" id="edit" contenteditable="true" ><P>Start typing.....</P></div>

<input type="button" class="btn btn-success mt-2" value="Save" onclick="saveEdits()"/>

<div class="last_viewer">
<h3>Last seen by:</h3>
<?php  $connection=new mysqli("localhost","root","","user");   //create connection 
    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());    //check connection
    }
    
    $sql= "select * from user_info where is_active_doc1='off'";
    $result=mysqli_query($connection,$sql);
    //$r=mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)) {
  $fullname= $row['firstname'].' '.$row['lastname'];
?>
<div class='names'> <?php echo $fullname;  ?> </div> <?php } ?>        
    
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>
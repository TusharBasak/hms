<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Appoinment Details</title>
  <link rel="stylesheet" href="table.css">
</head>
<body>
  


<div class="supercontainer">


  <button class="btn"><a href="doctor-dashboard.php">Go Back </a></button>
 

  <div class="container">
  <form action="doctorappoinmentdetailsview.php"  method="post" >
 
  <input type="number" name="docid" placeholder="Enter Doctor ID" class="search" required>
    <a href="doctorappoinmentdetailsview.php"><input type="submit"  name="dbsearch"  value="Search" ></a>
    
 
</form>
<?php
                if(isset($_GET['message1'])){
                    echo "<h3>".$_GET['message1']."</h3>";
                }
               ?>
  
</body>
</html>
 




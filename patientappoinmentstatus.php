<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Appoinment Status</title>
  <link rel="stylesheet" href="table.css">
</head>
<body>
  


<div class="supercontainer">


  <button class="btn"><a href="patient-dashboard.php">Go Back </a></button>
 

  <div class="container">
  <form action="patientappoinmentstatusview.php"  method="post" >
 
  <input type="number" name="patientid" placeholder="Enter patient ID" class="search" required>
    <a href="patientappoinmentstatusview.php"><input type="submit"  name="dbsearch"  value="Search" ></a>
    
 
</form>
<?php
                if(isset($_GET['message1'])){
                    echo "<h3>".$_GET['message1']."</h3>";
                }
               ?>
  
</body>
</html>
 




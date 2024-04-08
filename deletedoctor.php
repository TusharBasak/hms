<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Doctor</title>
  <link rel="stylesheet" href="table.css">
</head>
<body>
  


<div class="supercontainer">


  <button class="btn"><a href="admin-dashboard.php">Go Back </a></button>
 

  <div class="container">
  <form action="deletedoctoraction.php"  method="post" >
 
  <input type="email" name="email" placeholder="Enter Email" class="search" required>
    <a href="deletedoctoraction.php"><input type="submit"  name="deletedoctor"  value="Remove Doctor" ></a>
    
 
</form>
<?php
                if(isset($_GET['message1'])){
                    echo "<h3>".$_GET['message1']."</h3>";
                }
               ?>
</body>
</html>
 


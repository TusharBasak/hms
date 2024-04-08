<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Patient List</title>
  <link rel="stylesheet" href="table.css">
</head>
<body>
  


<div class="supercontainer">


  <button class="btn"><a href="admin-dashboard.php">Go Back </a></button>
 

  <div class="container">
  <form action="patientlistfind.php"  method="post" >
 
  <input type="email" name="email" placeholder="Enter Email" class="search" required>
    <a href="patientlistfind.php"><input type="submit"  name="dbsearch"  value="Search" ></a>
    
 
</form>
<?php
                if(isset($_GET['message1'])){
                    echo "<h3>".$_GET['message1']."</h3>";
                }
               ?>
  <h2 style="color: red;"> View patient List </h2>
  <table style="width:80%">
  <thed>
  <tr>
  <th>patient ID</th>
  <th >First Name</th>
    <th>last Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Contact</th>
  </tr>
</thead>
  <tbody>

  <?php 

                     include 'dbcon.php';

                    $query = "select * from `patreg`;";
                    $result = mysqli_query($connections,$query);
                    while ($row = mysqli_fetch_assoc($result)){
              
                     
                   ?>
                      <tr>
                      <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                      
                      </tr>
                     <?php } ?> 
                
                    


</tbody>
 
</table>
  </div>
  </div>
</body>
</html>
 




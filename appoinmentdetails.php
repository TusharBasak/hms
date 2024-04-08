<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Appoinment List</title>
  <link rel="stylesheet" href="table.css">
</head>
<body>
  


<div class="supercontainer">


  <button class="btn"><a href="admin-dashboard.php">Go Back </a></button>
 

  <div class="container">
  <form action="appoinmentdetailsfind.php"  method="post" >
 
  <input type="number" name="appoinmentid" placeholder="Enter Appoinment ID" class="search" required>
    <a href="appoinmentdetailsfind.php"><input type="submit"  name="dbsearch"  value="Search" ></a>
    
 
</form>
<?php
                if(isset($_GET['message1'])){
                    echo "<h3>".$_GET['message1']."</h3>";
                }
               ?>
  <h2 style="color: red;"> View Appoinment List </h2>
  <table style="width:80%">
  <thed>
  <tr>
  <th >Appoinment Id</th>
    <th>Pid</th>
    <th>Patient Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Doctor Id</th>
    <th>Doctor Name</th>
    <th>Doctor fee</th>
    <th>Application Date</th>
    <th>Application Time</th>
    <th>Status</th>
  </tr>
</thead>
  <tbody>

  <?php 

                     include 'dbcon.php';

                    $query = "select * from `appoinmenttb`;";
                    $result = mysqli_query($connections,$query);
                    while ($row = mysqli_fetch_assoc($result)){
              
                     
                   ?>
                      <tr>
                      <td><?php echo $row['appoinmentid'];?></td>
                        <td><?php echo $row['pid'];?></td>
                        <td><?php echo $row['patname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['docid'];?></td>
                        <td><?php echo $row['docname'];?></td>
                        <td><?php echo $row['docfee'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td><?php if( $row['status']){
                               echo "Active";
                        }  
                          else{
                            echo "Cancelled by Doctor";
                          }
                        
                        
                            
                        
                        
                            ?></td>
                      </tr>
                     <?php } ?> 
                
                    


</tbody>
 
</table>
  </div>
  </div>
</body>
</html>
 






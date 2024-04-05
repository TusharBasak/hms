<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Queries</title>
  <link rel="stylesheet" href="table.css">
</head>
<body>
  


<div class="supercontainer">
  <button class="btn"><a href="admin-dashboard.php">Go Back </a></button>
  <div class="container">
  <h2 style="color: red;"> View Queries </h2>
  <table style="width:80%">
  <thed>
  <tr>
  <th style="text-align:center">ID</th>
    <th style="text-align:center">Name</th>
    <th style="text-align:center">Email</th>
    <th style="text-align:center">Contact</th>
    <th style="text-align:center">Messages</th>
  </tr>
</thead>
  <tbody>

  <?php 

                     include 'dbcon.php';

                    $query = "select * from `feedback`;";
                    $result = mysqli_query($connections,$query);
                    while ($row = mysqli_fetch_array($result)){
              
                     
                   ?>
                      <tr>
                      <td style="text-align:center"><?php echo $row['id'];?></td>
                        <td style="text-align:center"><?php echo $row['name'];?></td>
                        <td style="text-align:center"><?php echo $row['email'];?></td>
                        <td style="text-align:center"><?php echo $row['contact'];?></td>
                        <td style="text-align:center"><?php echo $row['message'];?></td>
                      </tr>
                     <?php } ?> 
                
                    


</tbody>
 
</table>
  </div>
  </div>
</body>
</html>
 


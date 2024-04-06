<link rel="stylesheet" href="table.css">

<div class="supercontainer">
<button class="btn"><a href="doctorlist.php">Go Back </a></button>
    <div class="container">

    <?php
 include 'dbcon.php';
 $flag=false;
$email;
if(isset($_POST['dbsearch'])){
$email=$_POST['email'];
}

 $query= "select * from `doctb`";

 $result1=mysqli_query($connections,$query);

 if(!$result1){
  die("Query Failed".mysqli_error());
 }

  else{
      while($row=mysqli_fetch_assoc($result1)){
          $verify_email= $row['email'];
          if(($verify_email==$email)){
              $flag=true;
              break;
          }
          
      }
     
  }

  if($flag!=true){
    header('location:doctorlist.php?message1=Your email  is not found');
  }
   
  else{
    ?>
    <h2 style="color: red;"> Search Result </h2>
  <table style="width:80%">
  <thed>
  <tr>
  <th >ID</th>
    <th>UserName</th>
    <th>Email</th>
    <th>Specialist</th>
    <th>Doctor's Fee</th>
  </tr>
</thead>
  <tbody>

  <?php 



                     
                    $email;
                    
                    
                  
              
                $query = "select * from `doctb` where `email`='$email' ";
                     $result = mysqli_query($connections,$query);
                     while ($row = mysqli_fetch_assoc($result)){
              
                     ?>
                    
                       <tr>
                       <td><?php echo $row['doctid'];?></td>
                         <td><?php echo $row['username'];?></td>
                         <td><?php echo $row['email'];?></td>
                         <td><?php echo $row['spec'];?></td>
                       <td><?php echo $row['docfee'];?></td>
                   </tr> 
                      <?php } ?> 
                
                    


</tbody>
 
</table>
  
<?php } ?> 
 
    </div>
</div>





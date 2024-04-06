<link rel="stylesheet" href="table.css">

<div class="supercontainer">
<button class="btn"><a href="patientlist.php">Go Back </a></button>
    <div class="container">

    <?php
 include 'dbcon.php';
 $flag=false;
$email;
if(isset($_POST['dbsearch'])){
$email=$_POST['email'];
}

 $query= "select * from `patreg`";

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
    header('location:patientlist.php?message1=Your email  is not found');
  }
   
  else{
    ?>
    <h2 style="color: red;"> Search Result </h2>
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



                     
                    $email;
                    
                    
                  
              
                $query = "select * from `patreg` where `email`='$email' ";
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
  
<?php } ?> 
 
    </div>
</div>





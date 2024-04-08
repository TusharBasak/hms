<link rel="stylesheet" href="table.css">

<div class="supercontainer">
<button class="btn"><a href="doctorappoinmentdetails.php">Go Back </a></button>
    <div class="container">

    <?php
 include 'dbcon.php';
 $flag=false;
global $docid;
if(isset($_POST['dbsearch'])){
    $docid=$_POST['docid'];
}


$query= "select * from `appoinmenttb`";

 $result1=mysqli_query($connections,$query);

 if(!$result1){
  die("Query Failed".mysqli_error());
  
 }

  else{
      while($row=mysqli_fetch_assoc($result1)){
        $verify_docid= $row['docid'];
          if( $verify_docid==$docid){
              $flag=true;
              break;
          }
          
      }
     
  }

  if($flag!=true){
     header('location:doctorappoinmentdetails.php?message1=Your ID is not found');
    
  }
   
  else{
    ?>
    <h2 style="color: red;"> Search Result </h2>
  <table style="width:80%">
  <thed>
  <tr>
  
  <th >Appoinment Id</th>
    <th>Pid</th>
    <th>Patient Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Contact</th>
    <!-- <th>Doctor Id</th> -->
    <!-- <th>Doctor Name</th> -->
    <th>Doctor fee</th>
    <th>Application Date</th>
    <th>Application Time</th>
    <th>Status</th>
  
  </tr>
</thead>
  <tbody>

  <?php 



                     
                    
                    
                    
                  
              
                $query = "select * from `appoinmenttb` where `docid`='$docid' ";
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
                        <!-- <td><?php echo $row['docid'];?></td> -->
                        <!-- <td><?php echo $row['docname'];?></td> -->
                        <td><?php echo $row['docfee'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td><?php if($row['status']){
                                echo "Active";
                        }
                        else{
                            echo "Cancelled";
                        }
                        
                        
                        
                                             ?></td>
                   </tr> 
                      <?php } ?> 
                
                    


</tbody>
 
</table>
<?php } ?> 
    </div>
</div>











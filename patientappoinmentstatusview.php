<link rel="stylesheet" href="table.css">

<div class="supercontainer">
<button class="btn"><a href="patientappoinmentstatus.php">Go Back </a></button>
    <div class="container">

    <?php
 include 'dbcon.php';
 $flag=false;
global $patid;
if(isset($_POST['dbsearch'])){
    $patid=$_POST['patientid'];
}


$query= "select * from `appoinmenttb`";

 $result1=mysqli_query($connections,$query);

 if(!$result1){
  die("Query Failed".mysqli_error());
 }

  else{
      while($row=mysqli_fetch_assoc($result1)){
        $verify_patid= $row['pid'];
          if( $verify_patid==$patid){
              $flag=true;
              break;
          }
          
      }
     
  }

  if($flag!=true){
    header('location:patientappoinmentstatus.php?message1=Your Patient ID is not found');
  }
   
  else{
    ?>
    <h2 style="color: red;"> Search Result </h2>
  <table style="width:80%">
  <thed>
  <tr>
  
  
    <th>Doctor Name</th>
    <th>Doctor fee</th>
    <th>Application Date</th>
    <th>Application Time</th>
    <th>Status</th>
  
  </tr>
</thead>
  <tbody>

  <?php 



                     
                    
                    
                    
                  
              
                $query = "select * from `appoinmenttb` where `pid`='$patid' ";
                     $result = mysqli_query($connections,$query);
                     while ($row = mysqli_fetch_assoc($result)){
              
                     ?>
                    
                       <tr>
                      
                        <td><?php echo $row['docname'];?></td>
                        <td><?php echo $row['docfee'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td><?php if($row['status']){
                                echo "Active";
                        }
                        else{
                            echo "Cancelled by Doctor ";
                        }
                        
                        
                        
                                             ?></td>
                   </tr> 
                      <?php } ?> 
                
                    


</tbody>
 
</table>
<?php } ?> 
    </div>
</div>











<link rel="stylesheet" href="table.css">

<div class="supercontainer">

    <div class="container">

    <?php
 include 'dbcon.php';
 $flag=false;
 $ans=false;
global $appid;
if(isset($_POST['dbsearch'])){
    $appid=$_POST['appoinmentid'];
}


$query= "select * from `appoinmenttb`";

 $result1=mysqli_query($connections,$query);

 if(!$result1){
  die("Query Failed".mysqli_error());
  
 }

  else{
      while($row=mysqli_fetch_assoc($result1)){
        $verify_appid= $row['appoinmentid'];
          if( $verify_appid==$appid){
              $flag=true;
              break;
          }
          
      }
     
  }

  if($flag!=true){
     header('location:doctorcancelappoinment.php?message1=Appoinment ID is not found');
    
  }
   
  else{   
    $query3 = "UPDATE `appoinmenttb` SET `status`='$ans' WHERE `appoinmentid`='$appid'";
    $updateResult = mysqli_query($connections, $query3);
    if (!$updateResult) {
        echo "Error updating appointment status: " . mysqli_error($connections);
      } else {
        header('location:doctorcancelappoinment.php?message1=You Cancel a Appoinment');
      }

      
                
        }    
                    ?>   


        

    </div>
</div>











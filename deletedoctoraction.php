<?php

include 'dbcon.php';
?>
<?php

$email;
$name;
if(isset($_POST['deletedoctor'])){

    $email=$_POST['email'];

}


 // check email and password exist or not
  $flag=false;
 $query= "select * from `doctb`";

 $result1=mysqli_query($connections,$query);

 if(!$result1){
  die("Query Failed".mysqli_error());
 }

  else{
      while($row=mysqli_fetch_assoc($result1)){
          $verify_email= $row['email'];
          $name= $row['username'];
        //   $verify_password =$row['password'];
          if(($verify_email==$email)){
      
              $flag=true;
              break;
          }
          
      }
     
  }

  if(!$flag){
    header('location:deletedoctor.php?message1= Email is not found!!');
  }

  
  if($flag){
    $query2="delete from `doctb` where `email`='$email'";
    $result2=mysqli_query($connections,$query2);
    if(!$result2){
        die("query failed".mysqli_error());
    }
    else{
    header('location:deletedoctor.php?message1=Your Fired Doctor '.$name);
    }
  }
  

?>




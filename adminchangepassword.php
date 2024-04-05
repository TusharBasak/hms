<?php

include 'dbcon.php';
?>
<?php


if(isset($_POST['forget_password'])){

    $email=$_POST['email1'];
    $password=$_POST['password1'];
  






}


 // check email and password exist or not
  $flag=false;
 $query= "select * from `adminbid`";

 $result1=mysqli_query($connections,$query);

 if(!$result1){
  die("Query Failed".mysqli_error());
 }

  else{
      while($row=mysqli_fetch_assoc($result1)){
          $verify_email= $row['email'];
        //   $verify_password =$row['password'];
          if(($verify_email==$email)){
      
              $flag=true;
              break;
          }
          
      }
     
  }

  if(!$flag){
    header('location:adminforgetpassword.php?message1=Your email is not found!!');
  }

  if(strlen($password)<6){
    header('location:admingetpassword.php?message1=Your password must contain atleast 6 charecters');
    $flag=false;
    
}
  if($flag){
    $query2="update `adminbid` set `password`='$password' where `email`='$email'";
    $result2=mysqli_query($connections,$query2);
    if(!$result2){
        die("query failed".mysqli_error());
    }
    else{
    header('location:adminforgetpassword.php?message1=Your Password Change Successfully....');
    }
  }
//   else{
//     header('location:patientforgetpassword.php?message1=Your email is not found!!');
//   }
  

?>




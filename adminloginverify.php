<?php

include 'dbcon.php';
?>
<?php


if(isset($_POST['admin_login'])){

    $email=$_POST['email1'];
    $password=$_POST['password1'];
  

    $username;




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
          $verify_password =$row['password'];
          if(($verify_email==$email) && ($verify_password==$password)){
            $username=$row['username'];
              $flag=true;
              break;
          }
          
      }
     
  }

  if($flag==true){
    header('location:admin-dashboard.php');
    header('location:admin-dashboard.php?message=Welcome Mr '.$username);
  }
  else{
    header('location:adminlogin.php?message1=Your email or password is not correct');
  }
  

?>



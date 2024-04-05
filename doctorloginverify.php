<?php

include 'dbcon.php';
?>
<?php

$username;

if(isset($_POST['doctor_login'])){

    $email=$_POST['email1'];
    $password=$_POST['password1'];
  






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
          $verify_password =$row['password'];
          if(($verify_email==$email) && ($verify_password==$password)){
           $username=$row['username'];
              $flag=true;
              break;
          }
          
      }
     
  }

  if($flag==true){
    header('location:doctor-dashboard.php');
    header('location:doctor-dashboard.php?message=Welcome Doctor '.$username);
  }
  else{
    header('location:doctorlogin.php?message1=Your email and password is not correct');
  }
  

?>



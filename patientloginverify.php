<?php

include 'dbcon.php';
?>
<?php

$fullname;
if(isset($_POST['patient_login'])){

    $email=$_POST['email1'];
    $password=$_POST['password1'];
  






}

 // check email and password exist or not
  $flag=false;
 $query= "select * from `patreg`";

 $result1=mysqli_query($connections,$query);

 if(!$result1){
  die("Query Failed".mysqli_error());
 }

  else{
      while($row=mysqli_fetch_assoc($result1)){
          $verify_email= $row['email'];
          $verify_password =$row['password'];
          if(($verify_email==$email) && ($verify_password==$password)){
             $fname=$row['fname'];
             $lname=$row['lname'];
             $fullname= $fname." ".$lname;
              $flag=true;
              break;
          }
          
      }
     
  }

  if($flag==true){
    header('location:patient-dashboard.php?');
    header('location:patient-dashboard.php?message=Welcome '.$fullname);
  }
  else{
    header('location:patientlogin.php?message1=Your email and password is not correct');
  }
  

?>



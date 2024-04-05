<?php

include 'dbcon.php';

?>
<?php


$fname;
$lname;
$email;
$phone;
$password;
$gender;

 $flag=true;

if(isset($_POST['add_patient'])){

     $fname=$_POST['firstname'];
     $lname=$_POST['lastname'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $password=$_POST['password'];
     $gender=$_POST['gender'];


    // $fullname=$fname+" "+$lname;



}
$pattern_email = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
// email validation
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
   
  } else {
    header('location:patientsignup.php?message=Your Email Address Is not Valid');
    $flag=false;
  }

  // email verification
  
   $query1= "select * from `patreg`";

   $result1=mysqli_query($connections,$query1);

   if(!$result1){
    die("Query Failed".mysqli_error());
   }
 
    else{
        while($row=mysqli_fetch_assoc($result1)){
            $verify_email= $row['email'];
            if($verify_email==$email){
                $flag=false;
                // header('location:patientsignup.php?message=Your email Is already exist ..... Try new one!!');
                break;
            }
           
        }
        header('location:patientsignup.php?message=Your email Is already exist ..... Try new one!!');
    }

 
  // phone number validation
  $pattern = "/^(?:\+88|01)[3-9]\d{8}$/";
  if(preg_match($pattern, $phone) && ($phone>11)){
     
  }
  else{
    header('location:patientsignup.php?message=Your phone number Is not Valid');
    $flag=false;
  }


  
$password_length=6;
// password validation
 if(strlen($password )< $password_length){
    header('location:patientsignup.php?message=Your password is invalid');
    $flag=false;
 }

   if($flag==true){

    $query="insert into `patreg` (`fname`,`lname`,`gender`,`email`,`contact`,`password`)
    values('$fname','$lname', '$gender','$email', '$phone', '$password')";
    $result=mysqli_query($connections,$query);

    if(!$result){
        die("Query Failed".mysqli_error());
    }
    else{
       
        header('location:patientsignup.php?message=Registration Successful!!!!');
        // header(`location:patient-dashboard.php?message=Welcome ${fullname}`);
       
    }
//  header('location:patientsignup.php?message=Registration Successful!!!!');
   }

?>



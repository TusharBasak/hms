<?php

include 'dbcon.php';

?>
<?php


$name;
$email;
$password;
$specialization;
$docfee;

 $flag=true;

if(isset($_POST['add_doctor'])){
 
     $name=$_POST['name'];
     $specialization=$_POST['specalization'];
     $email=$_POST['email'];
     $password =$_POST['password'];
     $docfee=$_POST['docfee'];




}
$pattern_email = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
// email validation
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
   
  } else {
    header('location:adddoctor.php?message=Your Email Address Is not Valid');
    $flag=false;
  }

 



  
$password_length=6;
// password validation
 if(strlen($password )< $password_length){
    header('location:adddoctor.php?message=Your password is invalid');
    $flag=false;
 }

   if($flag==true){

  
    $query = "INSERT INTO `doctb` (`username`, `email`, `password`, `spec`, `docfee`) 
    VALUES ('$name', '$email', '$password', '$specialization', '$docfee')";

    $result=mysqli_query($connections,$query);

    if(!$result){
        die("Query Failed".mysqli_error());
    }
    else{
       
        header('location:adddoctor.php?message=You Successfully add doctor');
        // header(`location:patient-dashboard.php?message=Welcome ${fullname}`);
       
    }

   }

?>



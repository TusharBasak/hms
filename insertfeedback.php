<?php

include 'dbcon.php';

?>
<?php




 $flag=true;

if(isset($_POST['send_message'])){

     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $message=$_POST['textareainput'];



}

// echo $name;
// echo $email;
// echo $phone;
// echo $message;
$pattern_email = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
// email validation
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
   
  } else {
    header('location:feedback.php?message=Your Email Address Is not Valid');
    $flag=false;
  }



 
  // phone number validation
  $pattern = "/^(?:\+88|01)[3-9]\d{8}$/";
  if(preg_match($pattern, $phone) && ($phone>11)){
     
  }
  else{
    header('location:feedback.php?message=Your phone number Is not Valid');
    $flag=false;
  }


  


   if($flag==true){

    $query="insert into `feedback` (`name`,`email`,`contact`,`message`)
    values('$name', '$email', '$phone', '$message')";
    $result=mysqli_query($connections,$query);

    if(!$result){
        die("Query Failed".mysqli_error());
    }
    else{
        header('location:feedback.php?message=Congratulations!!!  message sent');
    }

   }

?>



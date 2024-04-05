<?php

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","hospital_management");

   $connections= mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

   if(!$connections){
      die("connection Failed");
   }

//    else{
//       header('location:patientsignup.php?message=dbcon Successful!!!!');
//    }
?>
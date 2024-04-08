<?php
include 'dbcon.php';
?>

<?php
$docid;
$selectdoctor;
$doctorfees;
$date;
$appoinmenttime;
$email;

$pid;
$fname;
$lname;
$gender ;
$email;
$contact;
$status=true;
$flag=true;
if(isset($_POST['add_appoinment'])){
     $selectdoctor=$_POST['doctor'];
      $doctorfees =$_POST['doctorfees'];
     $date = $_POST['dateofappoinment'];
     $appoinmenttime =$_POST['finddate'];
     $email   =$_POST['patemail'];
                     
    
    }

    // email validation
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
   
} else {
  header('location:bookappoinment.php?message=Your Email Address Is not Valid');
  $flag=false;
}

// email verification

 $query3= "select * from `patreg`";

 $result3=mysqli_query($connections,$query3);

 if(!$result3){
  die("Query Failed".mysqli_error());
 }

  else{
      while($row=mysqli_fetch_assoc($result3)){
          $verify_email= $row['email'];
          if(($verify_email==$email) && ($flag=true)){
            $query = "SELECT pid, fname, lname, gender, email, contact FROM patreg where `email`='$email'";

            $result = mysqli_query($connections, $query);
           
            while ($row = mysqli_fetch_assoc($result)) {
                $pid = $row['pid'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $gender = $row['gender'];
                $email = $row['email'];
                $contact = $row['contact'];
            
               
              }
           
        
              $doctor_list = mysqli_query($connections, "SELECT `doctid` FROM `doctb` WHERE `username` = '$selectdoctor'");
                            
                              $doctorfind = mysqli_fetch_assoc($doctor_list);
        
                              if ($doctorfind) {
                                $docid = $doctorfind['doctid'];
                                // Use $doctorfee for the first doctor's fee
                              } 
        
              
            
            
               
             
        
           
              $query2 = "INSERT INTO `appoinmenttb` (`pid`, `patname`, `gender`, `email`, `contact`,
              `docid`,`docname`,`docfee`,`appdate`,`apptime`,`status`) 
              VALUES ('$pid', ' $fname.$lname ', '$gender', '$email', '$contact','$docid','$selectdoctor','$doctorfees'
              ,'$date','$appoinmenttime','$status')";
          
              $result2=mysqli_query($connections,$query2);
          
              if(!$result2){
                  die("Query Failed".mysqli_error());
              }
              else{
                 
                  header('location:bookappoinment.php?message=You Successfully Booked an Appoinment and Your patient Id is'.$pid);
                  // header(`location:patient-dashboard.php?message=Welcome ${fullname}`);
                 
              }
              
              break;
          }
          else{
            header('location:bookappoinment.php?message=Email not found');
          }
         
      }
      
  }


   

      
  // // Use the retrieved data here 
  // echo "Patient ID: $pid<br>";
  // echo "Name: $fullname <br>";
  // echo "Gender: $gender<br>";
  // echo "Email: $email<br>";
  // echo "Contact: $contact<br>";
  // echo "doctid: $docid <br>";
  // echo $selectdoctor."</br>";
  // echo $doctorfees."</br>";
  // echo $date."</br>";
  // echo $appoinmenttime."<br>";
  // echo "status: $status <br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- google fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
      <link rel="stylesheet" href="mobile.css">
    <link rel="stylesheet" href="desktop.css" media="screen and (min-width:992px)">
</head>
<body>
      <!-- navbar starts here -->
      <div class="navbar" id="home-id">
        <h3 >Hospital Management System</h3>
      <!-- <div class="col-4" >
          
         <h1>
         <i class="fa fa-user-plus" aria-hidden="true"></i>
         </h1>
         
      
         
      </div> -->
      
      <div class="navbar-menu col-12" >
         <a href="doctorlist.php"> Doctor Lists</a>
         <a href="patientlist.php">patient Lists</a>
         <a href="appoinmentdetails.php"> View Appoinment details</a>
         <a href="adddoctor.php">Add Doctor</a>
         <a href="deletedoctor.php"> Delete Doctor</a>
         <a href="queries.php">Queries</a>
         <a href="index.html">Log Out </a>
      </div>
      </div>
      
      <!-- navbar ends here -->

    <!-- body part starts here -->
  
      
    <div class="container" id="body">

    <?php
                if(isset($_GET['message'])){
                    echo "<h1>".$_GET['message']."</h1>";
                }
               ?>
</div>


    <!-- body part ends here -->

      <!-- footer starts here -->
       
    <div id="footer">
      <div class="contact-links ">
          <h2>Follow  Us</h2>
         
          <div class="media-buttons">
              <button class="btn" onclick="window.open('https://www.facebook.com/tushar.basak.9693')" ><i class="fa fa-facebook" style="color:  #3063d0;" ></i></button>
              <button class="btn" onclick="window.open('https://www.linkedin.com/in/tushar-basak-823b69226/')" ><i class="fa fa-linkedin" style="color:  #2b61d5;" ></i></button>
              <button class="btn" onclick="window.open('https://mail.google.com/', '_blank')" ><i class="fa fa-edge" style="color:  #2b61d5;"></i></button>
              
              
          </div>

          <p class="copyright">© All rights reserved to Tushar Basak</p>
      </div>
  


                     
          
      
  </div>
  <!-- footer ends here  -->
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Forgetpassword</title>
    <link rel="stylesheet" href="patient.css">
</head>
<body>
    

    <div class="supercontainer">
    <button class="btn"><a href="adminlogin.php">Go Back</a></button>
             
   
        <div class="container">

            <h2 style="color: red;"> Forget password For Admin </h2>
              <form action="adminchangepassword.php" method="post">
    
                <input type="email" name="email1" placeholder="Enter Your Email"required> <br><br>
                
                <input type="password" name="password1" placeholder="Enter New password " required> <br><br>
               
               <input type="submit" name="forget_password" value="Change Password"></input>
        <br><br>
        <!-- <a href="patientforgetpassword.php"> <input type="submit"  value="Forget password"></input></a> -->
              </form>
               <?php
                if(isset($_GET['message1'])){
                    echo "<h3>".$_GET['message1']."</h3>";
                }
               ?>
              
        
        </div>

    </div>
    


</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="patient.css">
</head>
<body>
    

    <div class="supercontainer">
    <button class="btn"><a href="index.html">Go Back To Home</a></button>
             
    <button class="btn"><a href="adminforgetpassword.php">Forget Password</a></button>
        <div class="container">

            <h2 style="color: red;"> Login For Admin </h2>
              <form action="adminloginverify.php" method="post">
    
                <input type="email" name="email1" placeholder="Enter Your Email"required> <br><br>
                
                <input type="password" name="password1" placeholder="Enter password" required> <br><br>
               
               <input type="submit" name="admin_login" value="Login"></input>
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





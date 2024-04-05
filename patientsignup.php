<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient signup</title>
    <link rel="stylesheet" href="patient.css">
</head>
<body>
    

    <div class="supercontainer">
    <button class="btn"><a href="index.html">Go Back To Home</a></button>
        <div class="container">

            <h2 style="color: red;"> Registration Form For Patient </h2>
              <form action="insertpatient.php" method="post">
               
                <input type="text" name="firstname" placeholder="Enter First name" required> <br><br>
                <input type="text" name="lastname" placeholder="Enter Last name" required> <br><br>
                <input type="email" name="email" placeholder="Enter Your Email"required> <br><br>
                <input type="tel" name="phone" placeholder="Enter phone number"> <br><br>
                <input type="password" name="password" placeholder="Enter password more than 6 charecters"  required> <br><br>
                <label></label>
               <br>
               <label class="gender">Gender:</label>
    <input type="radio" name="gender"  value="male" checked> Male 
    <input type="radio" name="gender"  value="female"> Female 
    <input type="radio" name="gender"  value="other"> Other <br><br>
              <br>
              <a href="insertpatient.php"> <input type="submit" name="add_patient" value="Register"></input></a>
        
         <input type="reset" value="Reset"></input> <br><br>
        
              </form>
              </form>
               <?php
                if(isset($_GET['message'])){
                    echo "<h3>".$_GET['message']."</h3>";
                }
               ?>
        
        </div>

    </div>
    


</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
    <link rel="stylesheet" href="patient.css">
    <link rel="stylesheet" href="doctor.css">
</head>
<body>
    

    <div class="supercontainer">
    <button class="btn"><a href="admin-dashboard.php">Go Back To Home</a></button>
        <div class="container">

            <h2 style="color: red;"> Add a New Doctor </h2>
              <form action="insertdoctor.php" method="post">
               
                <input type="text" name="name" placeholder="Enter Doctor name" required> <br><br>
                 
                <!-- <label for="spec" class="text">Specialization:</label>   -->
                     
                       <select name="specalization" id="spec" class="select" >
                       <option value="specalization">Select  Specialization</option>
                        <option value="meadicine">Meadicine</option>
                        <option value="cardiologist">Cardiologist</option>
                        <option value="sergeon">Sergeon</option>
                         <option value="dermatology"> Dermatology</option>
                        

                        </select>
                        <br>
                        <br>
                 <input type="email" name="email" placeholder="Enter Doctor  Email"required> <br><br>
                <input type="password" name="password" placeholder="Enter password more than 6 charecters"  required> <br><br>
            

                <input type="number" name="docfee" placeholder="Enter Consultancy fee"  required> <br><br>
              <a href="insertdoctor.php"> <input type="submit" name="add_doctor" value="Add Doctor"></input></a>
                 <input type="reset" value="Reset"></input> 
        
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



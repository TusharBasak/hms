<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Specalist</title>
    <link rel="stylesheet" href="patient.css">
    <link rel="stylesheet" href="doctor.css">
    <link rel="stylesheet" href="appoinment.css">

</head>
<body>
    

    <div class="supercontainer">
    <button class="btn"><a href="patient-dashboard.php">Go Back To Home</a></button>
        <div class="container">

            <h2 style="color: red;"> Select a Specalist </h2>
              
               
                
                 
                <!-- <label for="spec" class="text">Specialization:</label>   -->
                <form action="bookappoinment.php" method="post">
                       <select name="specalization" id="select" class="select" required >
                       <option value="specalization">Select a Specialist</option>
                        <option value="meadicine">Meadicine</option>
                        <option value="dermatology">dermatology</option>
                        <option value="sergeon">Sergeon</option>
                         <option value="Cardiologist">Cardiologist</option>
                         
                        </select>
                        <a href="bookappoinment.php"> <input type="submit" name="select_specalist" value="Select" class="specalization"></a>
                       
                          </form>
                        
                        
        
             
             
             
        
        </div>

    </div>
    


</body>
</html>



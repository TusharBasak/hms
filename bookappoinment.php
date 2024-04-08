<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appoinment</title>
    <link rel="stylesheet" href="patient.css">
    <link rel="stylesheet" href="doctor.css">
    <link rel="stylesheet" href="appoinment.css">

</head>
<body>
    <?php
     include 'dbcon.php';
    global $specialization;
    global $doctorfees;
    ?>

    <div class="supercontainer">
    <button class="btn"><a href="selectspecalist.php">Go Back </a></button>
        <div class="container">

            <h2 style="color: red;"> Book an Appoinment </h2>
              <form action="insertappoinment.php" method="post">
               
                        
                        
                       
                     <select name="doctor" id="finddoc" class="select" required >
                     <option value="specalization">Select a Doctor</option>
                        <?php
                         
                        //  $specialization;
                        //  $doctorfees;
                        
                      if(isset($_POST['select_specalist'])){
                             $specialization=$_POST['specalization'];
                          
                      }
                     
                      $doctor_list = mysqli_query($connections,"SELECT * from `doctb` where `spec`='$specialization'");
                      while($doc=mysqli_fetch_assoc($doctor_list)){


                        ?>
                         <option value="<?php echo $doc['username']  ?>"><?php echo $doc['username']  ?></option>
                         <?php } ?>
                      </select>
                        
                      
                      <br>
                      <br>
                      
                      <!-- <select id="finddoc"  name="doctorfee" class="select fee" disabled > -->
                    
                        <?php
                     
                    //  $doctorfees;
                      $doctor_list = mysqli_query($connections, "SELECT `docfee` from `doctb` where `spec`='$specialization' LIMIT 1");
                    
                      $doctorfee = mysqli_fetch_assoc($doctor_list);

                      if ($doctorfee) {
                        $doctorfees = $doctorfee['docfee'];
                        // Use $doctorfee for the first doctor's fee
                      } 
                     
                        ?>
                          
                        
                      
                      <input type="number" name="doctorfees"   readonly
                      
                        value= <?php echo  $doctorfees  ?>
                        
                      > 
                      <br>
                      <br>
                <input type="date" name="dateofappoinment"   required> <br><br>

                
            
                <!-- <label for="spec" class="text">Select Time</label>   -->
                     
                     <select name="finddate" id="fdate" class="select" required>
                      <option value="selectvalue">Select Time</option>
                      <option value="10AM">10 AM </option>
                      <option value="12AM">12 PM </option>
                      <option value="02AM">02 PM </option>
                      <option value="04AM">04 PM </option>
                      <option value="06AM">06 PM </option>
                     
                   

                      </select>
                      <br>
                      <br>
                      <input type="email" name="patemail" placeholder="Enter Email"   required> <br><br>
                      
                
              <a href="insertappoinment.php"> <input type="submit" name="add_appoinment" value="Book Appoinment"></input></a>
                 <input type="reset" value="Reset"></input> 
        
             
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



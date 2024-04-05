<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedBack</title>
    <link rel="stylesheet" href="patient.css">
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    

    <div class="supercontainer">
    <button class="btn"><a href="index.html">Go Back To Home</a></button>
        <div class="container">

            <h1 style="color: red;"> Drop US A Message  </h1>
              <form action="insertfeedback.php" method="post">
               
                <input type="text" name="name" placeholder="Enter name" required> <br><br>
                 <input type="email" name="email" placeholder="Enter Your Email"required> <br><br>
                <input type="tel" name="phone" placeholder="Enter phone number" required> <br><br>
                <label for="textid" class="text"><b>Write Your Message:</b></label> <br><br>
                <textarea name="textareainput" class="textareaid"  id="textid">
  
              </textarea>
               <br>
               <br>
               <br>
              <a href=""> <input type="submit" name="send_message" value="Send Message"></input></a>
        
                <input type="reset" value="Reset"></input> <br><br>
        
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





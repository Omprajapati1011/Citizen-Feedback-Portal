<?php
// Database connection parameters
$dbhost = "localhost";     // Change this to your database host
$dbuser = "root";          // Change this to your database username
$dbpass = "";              // Change this to your database password
$database = "feedback";    // Change this to your database name

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  

 $query = "select * from feedback_chandkheda";
 $result = mysqli_query($conn, $query);
 $total = mysqli_num_rows($result);

 ?>
 
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
      <div>
        <?php  
        
           while($row = mysqli_fetch_assoc($result))
         {
            ?>

            <div>
                <?php
                  
                  echo $total;
                  
                  
                  ?>
            </div>
           <?php
         }

         ?>
        
      </div>
   </body>
   </html>
 
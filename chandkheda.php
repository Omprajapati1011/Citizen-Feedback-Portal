<?php
// Database connection parameters
$dbhost = "localhost";     // Change this to your database host
$dbuser = "root";          // Change this to your database username
$dbpass = "";              // Change this to your database password
$database = "feedback";    // Change this to your database name

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  

 $query = "select * from feedback_chandkheda";
 $result = mysqli_query($conn, $query);
 $total = mysqli_num_rows($result);

 $query1 ="select select1 from feedback_chandkheda where select1='yes' ";
$result1 = mysqli_query($conn, $query1);
$total1 = mysqli_num_rows($result1);
$row = mysqli_fetch_assoc($result1);

$query2 ="select select1 from feedback_chandkheda where select1='no' ";
$result2 = mysqli_query($conn, $query2);
$total2 = mysqli_num_rows($result2);
$row1 = mysqli_fetch_assoc($result2)
?>
<?php
if ($total1 > $total2) {
    ?>
       <script>
           alert("feedback positive");      
        </script>

   <?php
} 
elseif($total1 == $total2){
    ?>
    <script>
           alert("feedback Avg");      
        </script>
        <?php
}
else {
    ?>
      <script>
           alert("feedback Negative");      
        </script>
<?php
}
 ?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin-feedback.css">
</head>
<body>
    <div class="title">
        <img src="./assets/gujaratpolicelogo.png" class="logo" alt="">
        <div class="title1">
            <div>CITIZEN PORTAL, GUJARAT POLICE</div>
            <div>(HOME DEPARTMENT, GOVERNMENT OF GUJARAT)</div>
        </div>
    </div><div class="header-admin">
    <div class="header">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="">Login/Registration</a></li>
            <li><a href="">Online Form</a></li>
            <li><a href="">Photo Galarey</a></li>
            <li><a href="">Know Home Department</a></li>
            <li><a href="">User Guideline</a></li>
            <li><a href="">Absconder list</a></li>
            <li><a href="">Contact Details</a></li>
            <li><a href="">Lookout Notice</a></li>
        </ul>
        <div class="logout"><button><a href="index.html"> Logout </a></button></div>
     </div>
       </div>




        <div class="section">
            <div class="name">Chandkheda Police Station<div class="rating" data-rating="0">
                <span class="star1">&#9733;</span>
                <span class="star1">&#9733;</span>
                <span class="star1">&#9733;</span>   
                <span class="star1">&#9733;</span>
                <span class="star1">&#9733;</span>
            </div>
        </div>
    </div>
    
                <div class="cards">

                    
                    
                    <?php  
        
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <div class="card">
                <div class="seperation">
                    <div class="card-head">
                        <img src="favicon.ico" alt="">Steve
                    </div>

               <div class="rating" data-rating="0">
                    <span >
                        <?php
                    echo $row['date'];
                    ?>
                    </span>
                </div>
        </div>
            
            <div>

             <?php
            echo $row['textarea2'];

            ?>
            </div>
            
            </div>
        <?php
      }

      ?>




        <footer>
            <ul>
                <li>Terms & Conditions</li>
                <li>FAQ</li>
                <li>Privacy Policy</li>
            </ul>
    
        </footer>
</body>
</html>
 






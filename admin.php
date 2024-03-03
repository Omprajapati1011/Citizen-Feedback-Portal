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


 $query1 = "select * from feedback_jawhar";
 $result1 = mysqli_query($conn, $query1);
 $total1 = mysqli_num_rows($result1);

 $query2 = "select * from feedback_sabarmati";
 $result2 = mysqli_query($conn, $query2);
 $total2 = mysqli_num_rows($result2);
  
 $query3 = "select * from feedback_sardarnagar";
 $result3 = mysqli_query($conn, $query3);
 $total3 = mysqli_num_rows($result3);

 $query4 = "select * from feedback_ranip";
 $result4 = mysqli_query($conn, $query4);
 $total4 = mysqli_num_rows($result4);

 $query5 = "select * from feedback_oldc";
 $result5 = mysqli_query($conn, $query5);
 $total5 = mysqli_num_rows($result5);


 $sum = $total + $total1 + $total2 + $total3 + $total4  + $total5;

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
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
            <li><a href="feedback.html">Feedback</a></li>
        </ul>
        <div class="logout"><button><a href="index.html"> Logout </a></button></div>
    </div>
    <div class="admin-head">
    </div></div>
    <div class="row">
        <div class="admin-cards">
            <div class="card1">
                <div>Police Stations
                    <img src="./assets/gujaratpolicelogo.png" alt="">
                </div>
                <div>6</div>
            </div>
            <div class="card1">
                <div>Feedbacks
                    <img src="./assets/feedback-svgrepo-com.svg" alt="">
                </div>
                <div>
                <?php 
                      echo $sum;
                ?>
                </div>
            </div>

        </div>
    </div>
    
    <div class="section">
        <table>

            <tr>
                <td colspan="3">
                    <div class="section-card-head">

                        Active Police Stations</div>
                </td>
            </tr>


            <tr>
                <th>
                    <div>Police station name</div>
                </th>
                <th>
                    <div>Number of feedbacks</div>
                </th>
                <th>
                    <div>Ratings</div>
                </th>

            </tr>

            <tr>
                <td>
                  <a href="chandkheda.php">Chandkheda Police station</a>
                </td>
                <td>
                    <div>
                    <?php
                  
                  echo $total;
                  
                  
                  ?>

                    </div>
                </td>
                <td>
                    <div class="rating" data-rating="0">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="Sabarmati.php">Sabarmati Police Station </a>
                </td>
                <td>
                    <div> <?php
                  
                  echo $total2;
                  
                  
                  ?></div>
                </td>
                <td>
                    <div class="rating" data-rating="0">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                </td>
            </tr>


            <tr>
                <td>
                   <a href="Ranip.php">Ranip Police Station </a>
                </td>
                <td>
                    <div> 
                    <?php
                  
                  echo $total4;
                  
                  
                  ?>
                    </div>
                </td>
                <td>
                    <div class="rating" data-rating="0">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                </td>
            </tr>


            <tr>
                <td>
                    <a href="Sardarnagar.php">Sardarnagar Police Station </div></a>
                </td>
                <td>
                    <div> 
                    <?php
                  
                  echo $total3;
                  
                  
                  ?>
                    </div>
                </td>
                <td>
                    <div class="rating" data-rating="0">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="oldchandkheda.php">Police station (Old) Chandkheda</a>
                </td>
                <td>
                    <div> 
                    <?php
                  
                  echo $total5;
                  
                  
                  ?>
                    </div>
                </td>
                <td>
                    <div class="rating" data-rating="0">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                   <a href="jawhar.php">Jawhar Chowk Police Chowki </a>
                </td>
                <td>
                    <div> 

                    <?php
                  
                  echo $total1;
                  
                  
                  ?>
                    </div>
                </td>
                <td>
                    <div class="rating" data-rating="0">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                </td>
            </tr>

        </table>
    </div>
    <footer>
        <ul>
            <li>Terms & Conditions</li>
            <li>FAQ</li>
            <li>Privacy Policy</li>
        </ul>

    </footer>
</body>

</html>

<?php

$dbhost = "localhost";     
$dbuser = "root";          
$dbpass = "";              
$database = "feedback";    


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $post = mysqli_real_escape_string($conn, isset($_POST['post']) ? $_POST['post'] : "");
    $date = mysqli_real_escape_string($conn, isset($_POST['date']) ? $_POST['date'] : "");
    $time1 = mysqli_real_escape_string($conn, isset($_POST['time1']) ? $_POST['time1'] : "");
    $time2 = mysqli_real_escape_string($conn, isset($_POST['time2']) ? $_POST['time2'] : "");
    $checkbox1 = isset($_POST['checkbox1']) ? 1 : 0;
    $checkbox2 = isset($_POST['checkbox2']) ? 1 : 0;
    $checkbox3 = isset($_POST['checkbox3']) ? 1 : 0;
    $checkbox4 = isset($_POST['checkbox4']) ? 1 : 0; 
    $checkbox5 = isset($_POST['checkbox5']) ? 1 : 0;
    $checkbox6 = isset($_POST['checkbox6']) ? 1 : 0;    
    $checkbox7 = isset($_POST['checkbox7']) ? 1 : 0;
    $checkbox8 = isset($_POST['checkbox8']) ? 1 : 0;
    $checkbox9 = isset($_POST['checkbox9']) ? 1 : 0;
    $checkbox10 = isset($_POST['checkbox10']) ? 1 : 0;
    $checkbox11 = isset($_POST['checkbox11']) ? 1 : 0;
    $checkbox12  = isset($_POST['checkbox12']) ? 1 : 0;
    $select1 = mysqli_real_escape_string($conn, isset($_POST['select1']) ? $_POST['select1'] : "");
    $select2 = mysqli_real_escape_string($conn, isset($_POST['select2']) ? $_POST['select2'] : "");
    $select3 = mysqli_real_escape_string($conn, isset($_POST['select3']) ? $_POST['select3'] : "");
    $textarea1 = mysqli_real_escape_string($conn, isset($_POST['textarea1']) ? $_POST['textarea1'] : "");
    $textarea2 = mysqli_real_escape_string($conn, isset($_POST['textarea2']) ? $_POST['textarea2'] : "");
    $mobile_no = mysqli_real_escape_string($conn, isset($_POST['mobile_no']) ? $_POST['mobile_no'] : "");
    $name = mysqli_real_escape_string($conn, isset($_POST['name']) ? $_POST['name'] : "");

   
    $sql = "INSERT INTO feedback_ranip(post, date, time1, time2, checkbox1, checkbox2, checkbox3, checkbox4, checkbox5, checkbox6, checkbox7,checkbox8, checkbox9, checkbox10, checkbox11, checkbox12, select1, select2, select3, textarea1, textarea2, mobile_no, name) 
            VALUES ('$post', '$date', '$time1', '$time2', $checkbox1,  $checkbox2,  $checkbox3,  $checkbox4,  $checkbox5,  $checkbox6,  $checkbox7,  $checkbox8,  $checkbox9,  $checkbox10,  $checkbox11,  $checkbox12, '$select1', '$select2', '$select3', '$textarea1', '$textarea2', '$mobile_no', '$name')";  

    if (mysqli_query($conn, $sql)) {
        ?>
           <script>
               alert("Submitted");      
            </script>

       <?php
    } else {
        ?>

          <script>
               alert("Enter vailed data!");      
            </script>
    <?php
    }
}


mysqli_close($conn);
?>

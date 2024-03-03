<html>
    <head>
        <tittle>Submit Form</tittle>
    </head>
    <body>
        
        <?php
          $Name=$_POST["input1"];
          $Email=$_POST["input2"];
          $Number=$_POST["input3"];
          $Text=$_POST["textarea1"];

          echo "Customer Name=" . $Name . "</br>" ;
          echo "Customer Email=" . $Email . "</br>" ;
          echo "Customer Mobile Number=" . $Number . "</br>" ;
          echo "Customer Complain=" . $Text;          
        ?>

    </body>
</html>
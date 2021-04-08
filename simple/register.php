<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$carname = $carmodel = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   // Get username & password
       $carname = trim($_POST["CarName"]);
       $carmodel = trim($_POST["CarModel"]);  
       
   // Prepare an insert statement
   $sql = "INSERT INTO cars (carname, carmodel) VALUES (?, ?)";
       
       // Use DB info in $link from config.php to construct MySQL message/command
       if($stmt = mysqli_prepare($link, $sql)){
 
           // Bind variables to the prepared statement as parameters
           mysqli_stmt_bind_param($stmt, "ss", $param_carname, $param_carmodel);
           
           // Set parameters
           $param_carname = $carname;
           $param_carmodel = $carmodel;
          
           
           // Attempt to EXECUTE the prepared statement
           mysqli_stmt_execute($stmt);            
 
           // Close statement
           mysqli_stmt_close($stmt);
           $message = "The car you have entered is Successfully registered !";
 
       } else {
                $message = "Problems with inserting to Database";            
       }
 
   // Close connection
   mysqli_close($link);
}
?>
 
<html>
<head>
   <title>Registration</title>
</head>
<body>
 
<?php echo $message; ?>
 
</body>
</html>



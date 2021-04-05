<?php
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$carname = $carmodel = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
       $carname = trim($_POST["carname"]);
       $carmodel = trim($_POST["carmodel"]);
       
 
   // Validate credentials
 
       // Prepare a select statement
       $sql = "SELECT carname, carmodel FROM cars WHERE carname = ?";
       
       if($stmt = mysqli_prepare($link, $sql)){
           // Bind variables to the prepared statement as parameters
           mysqli_stmt_bind_param($stmt, "s", $param_carname);
           
           // Set parameters
           $param_carname = $carname;
           
           // Attempt to execute the prepared statement
           if(mysqli_stmt_execute($stmt)){
               // Store result
               mysqli_stmt_store_result($stmt);
               
               // Check if username exists, if yes then verify password
               if(mysqli_stmt_num_rows($stmt) == 1){                    
                   // Bind result variables
                   mysqli_stmt_bind_result($stmt, $carname, $carmodel);
			if(mysqli_stmt_fetch($stmt)){
                       if($carmodel == $carmodel){
                           // Password is correct Display a message that it's OK
                           $message = "The car that you have entered already exists!";
 
                       } else{
                           // Display an error message 
                           $message = "The car that you have entered does not exist.";
                       }
                 }
 		} else{
                   // Display an error message if username doesn't exist
                   $message = "No account found with that username.";
               }          
           }
 

           // Close statement
           mysqli_stmt_close($stmt);
       }
   
   // Close connection
   mysqli_close($link);
}
?>
 
<html>
<head>
   <title>Verification</title>
</head>
<body>
 
<?php echo $message; ?>
 
</body>
</html>


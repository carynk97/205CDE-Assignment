<?php

include('header.php');
require_once ('sqlconnect.php');

 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Validate username
    if(empty(trim($_POST["username"])))
	{
        $username_err = "Please enter a username.";
    } 
	else
	{
        // Prepare a select statement
        $sql = "SELECT id FROM register WHERE username = ?";
        
        if($stmt = mysqli_prepare($dbc, $sql))
		{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
			{
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1)
				{
                    $username_err = "This username is already taken.";
                } 
				else
				{
                    $username = trim($_POST["username"]);
                }
            } 
			else
			{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must have atleast 8 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
	
	if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";     
    }
    else{
        $email = trim($_POST["email"]);
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
	{
        
        // Prepare an insert statement
        $sql = "INSERT INTO register (username, password, email) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($dbc, $sql))
		{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);
            
            // Set parameters
            $param_username = $username;
            $param_password = $password;
			$param_email = $email;// Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
			{
                // Redirect to login page
                header("location: login.php");
            } 
			else
			{
                echo "Something went wrong. Please try again later.";
            }
        }   
    }
}
?>




<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Colorlib Templates">
	<meta name="author" content="Colorlib">
	<meta name="keywords" content="Colorlib Templates">

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	<link href="css/main.css" rel="stylesheet" media="all">
	
</head>

<body>
    
	<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
	<div class="wrapper wrapper--w780">
	<div class="card card-3">
	<div class="card-heading"></div>
	<div class="card-body">
	<h2 class="title">Registration Info</h2>
	<form method="POST">
	<div class="input-group">
	<input class="input--style-3" type="text" placeholder="Username" name="username" value="<?php if (isset($_POST['username'])){echo $_POST['username'];} ?>">
	</div>
	<div class="input-group">
	<input class="input--style-3" type="password" placeholder="Password" name="password">
	</div>
	<div class="input-group">
	<input class="input--style-3" type="password" placeholder="Confirm Password" name="confirm_password">
	</div>
	<div class="input-group">
	<input class="input--style-3" type="email" placeholder="Email" name="email" value="<?php if (isset($_POST['email'])){echo $_POST['email'];} ?>">
	</div>
	<?php echo $username_err; ?><br>
	<?php echo $password_err; ?><br>
	<?php echo $confirm_password_err; ?><br>
	<?php echo $email_err; ?>
	<p align="center"><a href="login.php" class="nav-link">Already have an account?</p>
	<div class="p-t-10">
	<button class="btn btn--pill btn--green" type="submit" name="submit">Submit</button>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>

</body>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>
<script src="js/global.js"></script>

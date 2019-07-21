<?php 

	include('header.php'); 
	
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("location: home.php");
    exit;
}
 
	require_once ('sqlconnect.php');
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Check if username is empty
    if(empty(trim($_POST["username"])))
	{
        $username_err = "Please enter username.";
    } 
	else
	{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"])))
	{
        $password_err = "Please enter your password.";
    } 
	else
	{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err))
	{
        $query = "SELECT * FROM register WHERE username = '$username' AND password= '$password' LIMIT 1";
        $id = "SELECT id FROM register WHERE username = '$username'";
        $results = mysqli_query($dbc, $query);

        if (mysqli_num_rows($results) == 1)
		{
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["id"] = $id;
            header('location: home.php');
        }
		else
		{
			$username_err = "Account does not exist!";
        }
    } 
	else
	{
        echo "Oops! Something went wrong. Please try again later.";
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
	<h2 class="title">Login</h2>
	<form method="POST">
	<div class="input-group">
	<input class="input--style-3" type="text" placeholder="Username" name="username">
	</div>
	<div class="input-group">
	<input class="input--style-3" type="password" placeholder="Password" name="password">
	</div>
	<?php echo $username_err ?><br>
	<?php echo $password_err ?>
	<p align="center"><a href="register.php" class="nav-link">Sign Up Here!</p>
	<div class="p-t-10">
	<button class="btn btn--pill btn--green" type="login">Login</button>
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


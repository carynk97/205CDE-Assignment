<?php 

	include('header.php'); 
	require_once('sqlconnect.php');
	
	$requestGame = "";
	$requestGameError = "";
	$requestGameSuccess = "";
	$requestGameNotLoggedIn = "";

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
	{
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(empty(trim($_POST["requestGame"])))
			{
				$requestGameError = "Please enter a game name.";     
			} 
			else
			{
				$requestGame = trim($_POST["requestGame"]);
			}
			
			if(empty($requestGameError))
			{
				$sql = "INSERT INTO request (requested) VALUES ('$requestGame')";
				mysqli_query($dbc, $sql);
				$requestGameSuccess = "Game requested!";
			}
		}
	}
	else
	{
		$requestGameNotLoggedIn = "You must be a member before requesting for a game!";
	}
?>

<head>

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
	<h2 class="title">Request For A Game!</h2>
	<form method="POST">
	<div class="input-group">
	<input class="input--style-3" type="text" placeholder="Game Name" name="requestGame" >
	</div>
	<?php echo $requestGameError; ?><br>
	<?php echo $requestGameSuccess; ?><br>
	<?php echo $requestGameNotLoggedIn; ?><br>
	<p align="center"><a href="register.php" class="nav-link">Sign Up Here!</p>
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


</section>


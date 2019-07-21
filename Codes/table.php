<?php include('header.php'); ?>

<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="vendor_table/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="vendor_table/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor_table/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor_table/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">


<section class="site-section">
	<div class="limiter">
	<div class="container-table100">
	<div class="wrap-table100">
	<h1 align="center">Minimum Requirement</h1><br><br>
	<div class="table100 ver1">
	<div class="table100-firstcol">
	
	<?php
	
		include('sqlconnect.php');
		$temp = $_GET['gameName'];
		$query = "SELECT * FROM minreq WHERE gameName='$temp'"; 
							
		if ($result = mysqli_query($dbc, $query)){
			while ($row = mysqli_fetch_array($result)) {
			
	?>
	
	<table>
	<thead>
		<tr class="row100 head">
		<th class="cell100 column1">Game Name</th>
	</tr>
	</thead>
	<tbody>
		<tr class="row100 body">
		<td class="cell100 column1"><?php echo $row["gameName"]; ?></td>
	</tr>
	</tbody>
	</table>
	
	<?php }} ?>
	
	</div>
	<div class="wrap-table100-nextcols js-pscroll">
	<div class="table100-nextcols">
	
	<?php
	
		include('sqlconnect.php');
		$temp = $_GET['gameName'];
		$query = "SELECT * FROM minreq WHERE gameName='$temp'";
							
		if ($result = mysqli_query($dbc, $query)) {
			while ($row = mysqli_fetch_array($result)) {
				
	?>
	<table>
	
	<thead>
	<tr class="row100 head">
		<th class="cell100 column2">Operating System</th>
		<th class="cell100 column3">Processor</th>
		<th class="cell100 column4">Memory</th>
		<th class="cell100 column5">Graphics</th>
		<th class="cell100 column6">Storage</th>
	</tr>
	</thead>
	
	<tbody>
	<tr class="row100 body">
		<td class="cell100 column2"><?php echo $row["os"]; ?></td>
		<td class="cell100 column3"><?php echo $row["processor"]; ?></td>
		<td class="cell100 column4"><?php echo $row["memory"]; ?></td>
		<td class="cell100 column5"><?php echo $row["graphics"]; ?></td>
		<td class="cell100 column6"><?php echo $row["storage"]; ?></td>
	</tr>
	</tbody>
	</table>
	
	<?php }} ?>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</section>

<section class="site-section">
	<div class="limiter">
	<div class="container-table100">
	<div class="wrap-table100">
	<h1 align="center">Recommended</h1><br><br>
	<div class="table100 ver1">
	<div class="table100-firstcol">
	
	<?php
	
		include('sqlconnect.php');
		$temp = $_GET['gameName'];
		$query = "SELECT * FROM maxreq WHERE gameName='$temp'"; 
							
		if ($result = mysqli_query($dbc, $query)){
			while ($row = mysqli_fetch_array($result)) {
			
	?>
	
	<table>
	<thead>
		<tr class="row100 head">
		<th class="cell100 column1">Game Name</th>
	</tr>
	</thead>
	<tbody>
		<tr class="row100 body">
		<td class="cell100 column1"><?php echo $row["gameName"]; ?></td>
	</tr>
	</tbody>
	</table>
	
	<?php }} ?>
	
	</div>
	<div class="wrap-table100-nextcols js-pscroll">
	<div class="table100-nextcols">
	
	<?php
	
		include('sqlconnect.php');
		$temp = $_GET['gameName'];
		$query = "SELECT * FROM maxreq WHERE gameName='$temp'";
							
		if ($result = mysqli_query($dbc, $query)) {
			while ($row = mysqli_fetch_array($result)) {
	
	?>
	<table>
	
	<thead>
	<tr class="row100 head">
		<th class="cell100 column2">Operating System</th>
		<th class="cell100 column3">Processor</th>
		<th class="cell100 column4">Memory</th>
		<th class="cell100 column5">Graphics</th>
		<th class="cell100 column6">Storage</th>
	</tr>
	
	</thead>
	<tbody>
	<tr class="row100 body">
		<td class="cell100 column2"><?php echo $row["os"]; ?></td>
		<td class="cell100 column3"><?php echo $row["processor"]; ?></td>
		<td class="cell100 column4"><?php echo $row["memory"]; ?></td>
		<td class="cell100 column5"><?php echo $row["graphics"]; ?></td>
		<td class="cell100 column6"><?php echo $row["storage"]; ?></td>
	</tr>
	</tbody>
	</table>
	
	<?php }} ?>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</section>
	
<script src="vendor_table/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor_table/bootstrap/js/popper.js"></script>
<script src="vendor_table/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor_table/select2/select2.min.js"></script>
<script src="vendor_table/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>

$('.js-pscroll').each(function(){
	var ps = new PerfectScrollbar(this);

$(window).on('resize', function(){
	ps.update();
})

$(this).on('ps-x-reach-start', function(){
	$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
});

$(this).on('ps-scroll-x', function(){
	$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
	});
});

		
		
		
</script>

<script src="js/main.js"></script>

</body>
</html>

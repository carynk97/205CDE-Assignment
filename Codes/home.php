<?php

include('header.php');
require_once ('sqlconnect.php');

?>

<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}


#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}


#myInput:focus {outline: 3px solid #ddd;}


.dropdown {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  border: 1px solid #ddd;
  z-index: 1;
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover {background-color: #f1f1f1}


.show {display:block;}
</style>

<section class="site-blocks-cover">
	<div class="container">
    <div class="row">
	<img src="images/fortnite.jpg" alt="Fortnite" class="img-fluid cover-img">
	<img src="images/csgo.jpg" alt="CSGO" class="img-fluid cover-img2">
    <div class="col-md-5 mr-auto align-self-center text-center text-md-left">
    <div class="intro-text">
    <h1>We Love Gaming!</h1>
    <p class="mb-4">Gaming is a way of life. We are here to answer your questions.</p>
	<div class="dropdown">
	<button onclick="myFunction()" class="dropbtn">Search For A Game</button>
	<div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="search" onkeyup="filterFunction()">
    <?php
	
		$query = "SELECT * FROM minreq ORDER BY gameName ASC"; 
		
		if ($result = mysqli_query($dbc, $query)) 
		{
			while ($row = mysqli_fetch_array($result)) { 
	?>
	
	<a href="table.php?gameName=<?php echo $row['gameName']; ?> "><?php echo $row["gameName"]; ?>
	
	<?php }} ?>	
					
	</div>
	</div>
	</div>
	</div>	  
    </div>
    </div>
    <div class="col-md-5 align-self-center text-center text-md-right">
    </div>
    </div>
    </div>
</section>

<script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>


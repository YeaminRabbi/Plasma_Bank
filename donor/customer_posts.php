<?php
	

	$servername = "localhost";
	$username = "root";
	$password = "";

	try {
	  $conn = new PDO("mysql:host=$servername;dbname=plasma_bank", $username, $password);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 
	} catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
	}

	$sql="Select * FROM customer_posts ORDER BY id DESC";
	$statement = $conn->prepare($sql);
	$statement->execute();
	$all_posts = $statement->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Plasma Bank - Donor</title>
</head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style>
		.footer {
		  position: fixed;
		  left: 0;
		  bottom: 0;
		  width: 100%;
		  background-color: black;
		  color: white;
		  text-align: center;
		}
		</style>

<body>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="index.php">Plasma Bank</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Home</a>
	      </li>
	     
	      <li class="nav-item">
	        <a class="nav-link" href="create_post.php">Create POST</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="customer_posts.php">Customer POST</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="donor_posts.php">Donor POST</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="../index.php">Logout</a>
	      </li>
	    </ul>
	  </div>
	</nav>


	<div class="container" style="margin-bottom: 200px;">
		

		<?php


			foreach ($all_posts as $key => $value) {
			
		?>

		<div class="posts" style="width: 50%;margin-left: 20%;padding: 10px;border: 2px solid black;margin-top: 10px;">
			<h5>Name: <?php echo $value['user_name']; ?></h5>
			<h5>Posted at:  <?php echo $value['date']." | ".$value['time']; ?></h5>
			<h5>Contact: <?php echo $value['contact']; ?> </h5>
			<p> <?php echo $value['post']; ?> </p>
		</div>
		<?php 
			}
		?>

		
	</div>



	<div class="footer">
	  <p>Plasma Bank Copywrigth 2021</p>
	</div>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
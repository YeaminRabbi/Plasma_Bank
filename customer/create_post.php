
<?php
		
		session_start();

		$userid = $_SESSION['id'];
		$username= $_SESSION['name'];
		
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Plasma Bank | Customer</title>
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

	<div class="container" style="margin-bottom:200px;">
     
    <form action="action_page.php" method="POST">
      

      <div class="form-group">
        <label for="post">Write your post:</label>
        <textarea class="form-control" id="post" name="post"></textarea>
      </div>

       <div class="form-group">
        <label for="Contact">Contact Number:</label>
        <input class="form-control" id="contact" name="contact">
      </div>
      
      <input type="hidden" name="id" value="<?php echo $userid ; ?>">
      <input type="hidden" name="name" value="<?php echo $username ; ?>">
      
      <button type="submit" class="btn btn-primary" name="btn-user_post">Submit</button>
    </form>
  </div>
 

	<div class="footer">
	  <p>Plasma Bank Copywrigth 2021</p>
	</div>





	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
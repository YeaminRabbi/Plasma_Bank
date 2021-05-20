<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "plasma_bank";

	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	//create a post
	if(isset($_POST['btn-user_post']))
	{
		$name = $_POST['name'];
		$post = $_POST['post'];
		$id = $_POST['id'];
		$contact= $_POST['contact'];

		$sql = "INSERT INTO customer_posts (user_id, user_name, post, contact) VALUES ('$id','$name','$post','$contact')";
		$conn->query($sql);


		header("Location: create_post.php");
	}


?>
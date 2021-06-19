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
	if(isset($_POST['donor_post']))
	{
		$name = $_POST['name'];
		$post = $_POST['post'];
		$id = $_POST['id'];
		$contact= $_POST['contact'];
		$blood_group= $_POST['blood_group'];



		$sql = "INSERT INTO donor_posts (user_id, user_name, post, contact,blood_group) VALUES ('$id','$name','$post','$contact','$blood_group')";
		$conn->query($sql);


		header("Location: create_post.php");
	}


	//search for donor
	if(isset($_POST['searchButton']))
	{
		$blood_group = $_POST['search'];


		header("Location: search.php?blood_group=$blood_group");
	}


	//search by name
	if(isset($_POST['searchButtonName']))
	{
		$donor_name = $_POST['donor_name'];
		header("Location: searchbyname.php?donor_name=$donor_name");


	}
?>
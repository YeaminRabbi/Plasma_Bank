<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "plasma_bank";

	
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	

	/// USER Registrations
	if(isset($_POST['btn-user_registration']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$blood_group = $_POST['blood_group'];
		$nid = $_POST['nid'];
		$address = $_POST['address'];
		$user_type = $_POST['user_type'];
		$password = $_POST['password'];

		$sql = "INSERT INTO users (name, email,contact,blood_group,nid,address,user_type,password) VALUES ('$name','$email','$contact','$blood_group','$nid','$address','$user_type','$password')";
		$conn->query($sql);


		header("Location: user_registration.php");
	}

	//User Login
	if(isset($_POST['btn-user_login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];


		$sql = "Select count(*),id,name from users where email='$email' and password='$password' and user_type='CUSTOMER';";
		$result = $conn->query($sql);

		$row = $result->fetch_assoc();


		if($row['count(*)']=="1")
		{

			session_start();

			$_SESSION['id']=$row['id'];
			$_SESSION['name']=$row['name'];

			header("Location: customer/index.php");
		}
		else
		{
			header("Location: customer_login.php");
		}


	}



	//Donor Login
	if(isset($_POST['btn-user_donor']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];


		$sql = "Select count(*),id,name,blood_group from users where email='$email' and password='$password' and user_type='DONOR';";
		$result = $conn->query($sql);

		$row = $result->fetch_assoc();


		if($row['count(*)']=="1")
		{

			session_start();

			$_SESSION['donor_id']=$row['id'];
			$_SESSION['donor_name']=$row['name'];
			$_SESSION['donor_blood_group']=$row['blood_group'];

			header("Location: donor/index.php");
		}
		else
		{
			header("Location: donor_login.php");
		}


	}


?>
<?php
	include '../include/codeforconection.php';

	if(isset($_POST['submit'])){
		
		    $fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
		    $phoneNo=$_POST['phone'];
		    $message=$_POST['message'];
		    $password=$_POST['password'];

		    $sql="INSERT INTO `user`(`fname`, `lame`, `email`,' password', `phoneNo`, `message`) VALUES ( '$fname','$lname','$email', '$password','$phoneNo','$message')";

		    $result=mysqli_query($con,$sql);
		    if($result){
		    	//header('location:index.php');
		    	echo "data inserted successfully";

		    }else{
		    	die(mysqli_error($con));
		    	echo 'i m nott here';
		    }

	}
	



?>
<?php
	include 'include/dbconn.php';
    //$value=0;
	if(isset($_POST['submit'])){
		    $fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
		    $phoneNo=$_POST['phone'];
		    $message=$_POST['message'];
		   // $status=$value;
		   

		    $sql="INSERT INTO `user`(`fname`, `lname`, `email`, `phoneNo`, `message`) VALUES ( '$fname','$lname','$email', '$phoneNo','$message')";

		    $result=mysqli_query($con,$sql);
		    if($result){
		    	header('location:index.php');
		    	echo "data inserted successfully";

		    }else{
		    	die(mysqli_error($con));
		    	echo "data  not  inserted successfully";

		    }

	}
	



?>
<?php

	include '../include/dbconn.php';

	if(isset($_GET['rejectId'])){
		$User_Id=$_GET['rejectId'];

		$sql="delete from `user` where User_Id='$User_Id'";
		$result=mysqli_query($con,$sql);
		if($result){
			
			header('location: dasboard.php');
		}else{
			die(mysqli_error($con));
		}
	}

  ?>
<?php
	include 'include/dbconn.php';
    //$value=0;
	if(isset($_POST['submit'])){
		    $USER_Id=$_POST['USER_Id'];
			$User_Password=$_POST['User_Password'];
			$User_Email=$_POST['User_Email'];
		   
		 
		   

		    $sql="INSERT INTO `userinfo`(`User_Id`, `User_Email`, `User_Password`) VALUES ('$USER_Id','$User_Password','$User_Email')";

		    $result=mysqli_query($con,$sql);
		    if($result){
		    	header('location:dasboard.php');
		    	echo "data inserted successfully";

		    }else{
		    	die(mysqli_error($con));
		    	echo "data  not  inserted successfully";

		    }

	}
	



?>
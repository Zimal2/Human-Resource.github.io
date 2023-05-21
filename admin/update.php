<?php
 include dbconn.php;
 $id=$_GET['updatedId'];
 $sql='select * from 'userinfo' where id=$id';
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);

            $fname=$row['$fname'];
			$lname=$row['$lname'];
			$email=$row['$email'];
		    $phoneNo=$row['$phone'];
		    $message=$row['$message'];
		    $password=$row['password'];



 if(isset($_POST['submit'])){
		    $fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
		    $phoneNo=$_POST['phone'];
		    $message=$_POST['message'];
		    $password=$_POST['password'];

		    $sql="UPDATE `user` SET `user-id`='$id',`First_name`='[value-2]',`Last_Name`='[value-3]',`email`='[value-4]',`password`='[value-5]',`PhoneNo`='[value-6]',`message`='[value-7]' WHERE 1";////? names

		    $result=mysqli_query($con,$sql);
		    if($result){
		    	//header('location:index.php');
		    	echo "data inserted successfully";

		    }else{
		    	die(mysqli_error($con));

		    }

	}
	

?>
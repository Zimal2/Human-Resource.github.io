<?php
session_start();
include '../include/dbconn.php';

if(isset($_POST['User_Email']) && isset($_POST['fname'])){
$User_Email=$_POST['User_Email'];
$fname=$_POST['fname'];
  $sql="select * FROM user WHERE email='$User_Email' AND fname='$fname' ";

$query=mysqli_query($con,$sql);       //dta stored in query
if(mysqli_num_rows($query)==1){
                             //num rows counts numb of records..if 1 record login to dashboard

	$data=mysqli_fetch_assoc($query);           //dta in from of arr so used this
	echo $_SESSION['USER_Id']=$data['User_Id'];        //data frm session is stored(every users id)
	header('location:../change.php');
	
}else{
	header('location:index.php');
}

}




?>
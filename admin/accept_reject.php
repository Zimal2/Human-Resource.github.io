<?php
$User_Id=$_GET['User_Id'];
$status=$_GET['status'];
if($status==0){
	include'../include/dbcon.php';
	$sql="UPDATE `user` SET user_ac_status ='$ac' WHERE `user_id`='$id'";
	$cur=mysqli_query($conn,$sql);
	if($cur){
		header('location:user_account.php?status=approved');
	}
}else
{
	
	$sql="UPDATE `user` SET user_ac_status ='$ac' WHERE `user_id`='$id'";
	$cur=mysqli_query($conn,$sql);
	if($cur){
		header('location:user_account.php?status=approved');

}
}

?>
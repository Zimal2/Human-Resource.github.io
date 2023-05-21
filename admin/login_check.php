<?php
session_start();
include '../include/dbconn.php';

if(isset($_POST['User_Email']) && isset($_POST['User_Password'])){
$User_Email=$_POST['User_Email'];
$User_Password=$_POST['User_Password'];
 $sql="select * FROM userinfo WHERE User_Email='$User_Email' AND User_Password='$User_Password' ";

$query=mysqli_query($con,$sql);       //dta stored in query
if(mysqli_num_rows($query)==1){
                             //num rows counts numb of records..if 1 record login to dashboard

	$data=mysqli_fetch_assoc($query);           //dta in from of arr so used this
	 $_SESSION['USER_Id']=$data['User_Id'];        //data frm session is stored(every users id)
	header('location:dasboard.php');
	
}else{
	header('location:index.php');
}

}




?>
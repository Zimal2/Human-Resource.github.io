<?php
session_start();
include 'include/dbconn.php';
$id=$_SESSION['USER_Id'];

 $sql=" select * from user where User_Id='$id'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);

 $lname=$row['lname'];
 $phoneNo=$row['phoneNo'];
 $message=$row['message'];


 if(isset($_POST['submit'])){
        $lname=$_POST['lname'];
        $phoneNo=$_POST['phoneNo'];
        $message=$_POST['message'];
        

       $sql="UPDATE user SET `lname`='$lname' , `phoneNo`='$phoneNo',`message`='$message' WHERE User_Id='$id'";
    
      
        $result=mysqli_query($con,$sql);
        if($result){
          header('location:index.php');
         // echo "data inserted successfully";

        }else{
          die(mysqli_error($con));

        }

  }
  

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>
<body>
	<h3 class="text-center title mb-3">Contact Us </h3><hr>
	
<?php
session_start();
include 'include/dbconn.php';
$id=$_SESSION['USER_Id'];

 $sql=" select * from user where User_Id='$id'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);

 $fname=$row['fname'];
 $lname=$row['lname'];
 $email=$row['email'];
 $phoneNo=$row['phoneNo'];
 $message=$row['message'];


 if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
        $phoneNo=$_POST['phone'];
        $message=$_POST['message'];
        

       
        $result=mysqli_query($con,$sql);
        if($result){
          //header('location:index.php');
          echo "data inserted successfully";

        }else{
          die(mysqli_error($con));

        }

  }
  

?>

<div class="col-lg-6" style="float: left;">
            <div class="address_mail_footer_grids ">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
            </div>
          </div>
<section>
<div class="col-lg-6 contact-form-txt" style="float: left;">
            <form action="update.php" method="post">
              <div class="w3pvt-wls-contact-mid">
                <div class="row">
                 
                  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                    <input type="text" class="form-control" value="<?php echo $row['lname']?>"  name='lname' placeholder="Last Name" required="">
                  </div>
                </div>
                <div class="row">
                 
                  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                    <input type="text" class="form-control" value="<?php echo $row['phoneNo']?>" name='phoneNo' placeholder="Phone" required=""> 
                  </div>
                </div>
                <div class="form-group contact-forms">
                  <textarea class="form-control" placeholder="Message" value="<?php echo $row['message']?>" name='message' rows="3" required=""></textarea>
                </div>
                <input type="submit" name='submit'  class="btn sent-butnn"></button>
                 <button name="home"  class="btn sent-butnn"><a href="index.php">HOME</a></button>
              </div>
            </form>
          </div>
        </div>

</section>
</body>
</html>




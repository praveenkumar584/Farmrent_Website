<?php
$host='localhost:3306';
$user='root';
$pass='';
$dbname='praveen';
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
{
    die('could not connect:'.mysqli_error($conn));
}
if(isset($_POST['register_button'])){
  $user_nam=$_POST['name'];
  $user_mail=$_POST['email'];
  $user_pass=$_POST['password'];
  $user_confirm=$_POST['cnpassword'];
  $user_mobile=$_POST['phoneNumber'];
  $user_gender=$_POST['gender'];
  $user_photo=$_FILES['fileToUpload']['name'];
  $user_photo_tmp=$_FILES['fileToUpload']['tmp_name'];
  $user_postal=$_POST['zipcode'];
  //inserting
  move_uploaded_file($user_photo_tmp,"./user_images/$user_photo");
  $qry="insert into user_data(user_name,user_mail,user_password,user_confirm,user_mobile,user_gender,user_image,user_postal)
   values('$user_nam','$user_mail',$user_pass,$user_confirm,$user_mobile,'$user_gender','$user_photo',$user_postal)";
   if(mysqli_query($conn,$qry));
    {
        echo "<script>alert('registration is successfull')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="register.css">

</head>
<body>
<div class="container">
  <h1>Sign In into website</h1>
  <form name="registration" class="registartion-form"  method="POST" onsubmit="return formValidation()" enctype="multipart/form-data">
    <table>
      <tr>
        <td><label for="name">Username:</label></td>
        <td><input type="text" name="name" id="name" placeholder="your name" required ></td>
      </tr>
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="text" name="email" id="email" placeholder="your email" required ></td>
      </tr>
      <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" name="password" id="password" required></td>
      </tr>
      <tr>
        <td><label for="cnpassword"> Confirm Password:</label></td>
        <td><input type="password" name="cnpassword" id="password" required ></td>
      </tr>
      <tr>
        <td><label for="phoneNumber">Phone Number:</label></td>
        <td><input type="text" name="phoneNumber" id="phoneNumber" required ></td>
      </tr>
      <tr>
        <td><label for="gender">Gender:</label></td>
        <td>Male: <input type="radio" name="gender" value="male">&emsp;
          Female: <input type="radio" name="gender" value="female"></td>
      </tr>
      <tr>
        <td>
    <label for="fileToUpload"><b>upload your image:</b></label></td>
    <td><input type="file" name="fileToUpload" id="fileToUpload" required></td>
      </tr>
      <tr>
        <td><label for="zipcode">Zip Code:</label></td>
        <td><input type="number" name="zipcode" id="zipcode" required autocomplete="off"></td>
      </tr>
      <tr>
        <td ><input type="submit" class="submit" value="Register"  name="register_button" style="color:white; background-color:green;"/></td>
      </tr>
      <tr>
        <td colspan="2"><p class="small fw-bold">Already have an account?<a href="login.php" style="color:red;">  Login</a></p></td>
</tr>
    </table>
  </form>
</div>

<script  src="register.js"></script>
</body>
</html>
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
  //selecting
  $qry2="select * from user_data where user_name='$user_nam' or user_mail='$user_mail'";
  $result=mysqli_query($conn,$qry2);
  $rows_count=mysqli_num_rows($result);
  if($rows_count>0)
  {
    echo "<script>alert('username or e-mail  already exist')</script>";
  }
else if($user_pass!=$user_confirm){
  echo "<script>alert('confirm your password correctly')</script>";
}



  //inserting
  else{
  move_uploaded_file($user_photo_tmp,"./user_images/$user_photo");
  $qry="insert into user_data(user_name,user_mail,user_password,user_confirm,user_mobile,user_gender,user_image,user_postal)
   values('$user_nam','$user_mail',$user_pass,$user_confirm,$user_mobile,'$user_gender','$user_photo',$user_postal)";
   if(mysqli_query($conn,$qry));
    {
        echo "<script>alert('registration is successfull')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
  }
}
?>
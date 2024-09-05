<!DOCTYPE html>
<html>
    <head>
        <title>
            Uploading page
        </title>
        <link rel="stylesheet" href="upload.css">
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer"/>
        </script>
        <style>
            *
{
    align-items: center;
    padding: 15px;
}
body{
    background-color: rgb(172, 165, 156);
}
.first
{
    border:solid;
    border-radius: 5px;
    border-color: rgb(73, 118, 118);
}
.button{
    border-radius: 5px;
    border: solid;
    background-color: rgb(74, 200, 122);
    align-items: center;
    margin-left: 500px;
    color:white;
    padding:12px 34px;
    font-size: 20px;
    background:green;
    cursor: pointer;
    
}
.button:hover{
    background-color: rgb(79, 89, 181);
    color:white;
}
.input{
    border-radius: 5px;
    border: solid; 
    size: 20px; 
}
        </style>
    </head>
<body>
    <caption><h3>Upload Your and Machines Details</h3></caption>
<form action="" method="post" enctype="multipart/form-data" class="first">
    <label for="name"><b>Name:</b></label>
    &emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; <input type="text" id="name" name="name" class="input" required><br><br>
    <label for="cell"><b>Mobile.No:</b></label>
    &emsp; &emsp; &emsp;&emsp;&emsp;&nbsp;&nbsp;<input type="mobile" id="cell" name="cell" class="input" required><br><br>
    <label for="mail"><b>E-Mail:</b></label>
    &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&nbsp;&nbsp;<input type="text" id="mail" name="mail" class="input" required><br><br>
    <label for="machine"><b>Type of Machine:</b></label>
    &emsp; &emsp; &emsp;<input type="text" id="machine" name="machine" class="input" required><br><br>
    <label for="rate"><b>Rate exceting for an acre:</b></label>
    &nbsp;<input type="text" id="rate" name="rate" class="input" required><br><br>
    <label for="fileToUpload"><b>Select an Machine Image:</b></label>
    &emsp; &emsp;&nbsp;&nbsp;<input type="file" name="fileToUpload" id="fileToUpload" required><br><br>
    <button onclick="Done()" class="button" name="upload">Done
</form>
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
if(isset($_POST['upload'])){
  $name=$_POST['name'];
  $mobile=$_POST['cell'];
  $email=$_POST['mail'];
  $machine=$_POST['machine'];
  $rate=$_POST['rate'];
  $photo=$_FILES['fileToUpload']['name'];
  $photo_tmp=$_FILES['fileToUpload']['tmp_name'];
  $qry="insert into upload_data(name,mobile,e_mail,machine,rate,image)
  values('$name',$mobile,'$email','$machine',$rate,'$photo')";
  move_uploaded_file($photo_tmp,"./user_images/$photo");
  if(mysqli_query($conn,$qry));
   {
       echo "<script>alert('uploading  is successfull')</script>";
       echo "<script>window.open('insert.php','_self')</script>";
   }
}
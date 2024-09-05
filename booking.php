<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #131a7d;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
h3{
  text-align: center;
  font-size: 20px;
  background-color: rgb(226, 219, 210);
}

input[type=submit]:hover {
  background-color: #7ea680;
}

.container {
  border-radius: 5px;
  background-color: #94a78a;
  padding: 20px;
}
/*....
...
*/
.btn
    {
    text-decoration: none;
    color: #913215;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
    margin-left:500px;
    border:10px;
    border-radius:5px;
    }
    .btn:hover{
    background: #17ac14;
    color: white;
    }
</style>
</head>
<body>

<h3>Booking Form</h3>

<div class="container">
  <form action="" method="post">
    <label for="fname">Name of the Customer:</label>
    <input type="text" id="fname" name="cname" placeholder="Your name..">

    <label >Email:</label>
    <input type="text" name="mail" placeholder="Your Email..">
    <label>Phone Number:</label>
    <input type="text" name="cell" placeholder="Your PhoneNumber..">
    <label >Type of Machine:</label>
    <input type="text" name="type" placeholder="Type of Machine..">
    <label>Location:</label>
    <input type="text" name="loc" placeholder="Location..">
    <label>Area of the Land:</label>
    <input type="text" name="area" placeholder="Area of the Land..">
    <label >Payment Mode:</label>
    <input type="radio" name="offline" value="offline">Offline
    <input type="radio" name="offline" value="online">Online
    <br>
    <br>
    <label>Date to Work:</label>
    <input type="text" name="work" placeholder="Date to Work..">

    <label for="subject">Anything Else:</label>
    <textarea id="subject" name="subject" placeholder="Write something(or)Any Queries.." style="height:200px"></textarea>

    <input type="submit" value="BOOK" name="book"  class="btn">
  </form>
</div>
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
if(isset($_POST['book']))
{
    $v1=$_POST ["cname"];
    $v2=$_POST ["mail"];
    $v3=$_POST ["cell"];
    $v4=$_POST ["type"];
    $v5=$_POST ["loc"];
    $v6=$_POST ["area"];
    $v7=$_POST ["offline"];
    $v8=$_POST ["work"];
    $v9=$_POST ["subject"];
   if($v7=='online')
   {
    $sql1="insert into booking(Name_of_customer,email,phone_number,Type_of_machine,location,Area_of_land,payment_mode,date_to_work,anything_else)values('$v1','$v2',$v3,'$v4','$v5',$v6,'$v7','$v8','$v9')";
    if(mysqli_query($conn,$sql1));
    {
    echo "<script>alert('BOOKING WAS SUCCESSFULL')</script>";
    echo "<script>window.open('payment.php','_self')</script>";
   }
    }
   else
   {
    $sql1="insert into booking(Name_of_customer,email,phone_number,Type_of_machine,location,Area_of_land,payment_mode,date_to_work,anything_else)values('$v1','$v2',$v3,'$v4','$v5',$v6,'$v7','$v8','$v9')";
    if(mysqli_query($conn,$sql1));
    {
    echo "<script>alert('BOOKING WAS SUCCESSFULL')</script>";
    echo "<script>window.open('booksuc.php','_self')</script>";
   }
  }
}
?>
</body>
</html>
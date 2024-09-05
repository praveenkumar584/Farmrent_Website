<html>
<head>
    <link rel="stylesheet" href="login.css">
    <title>Login Form </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
</head>

<body>
    <div class="login-page">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="animate-charcter">Agri Rental Machine-A Online website....Login into this,<br>
                    Enjoy the Services</h3>
              </div>
            </div>
          </div>
        <div class="form">
            <form class="login-form " action="" target="_blank" method="POST" enctype="multipart/form-data">
                <h2>LOGIN IN TO YOUR ACCOUNT</h2>
                <input type="text" required placeholder="Username" id="user" autocomplete="off" name="username" />
                <input oninput="return formvalid()" type="password" required placeholder="Password" id="pass"
                    autocomplete="off" name="password"/>
                    <span id="vaild-pass"></span>
                <input type="submit" name="user_login" value="LOGIN"/>
                <p class="message"><a href="#">Forgot your password?</a></p>
                <p>If you Don't have an <B>Account</B>&nbsp;&nbsp;<a href="http://localhost/FARMRENT/register.php">register</a></p>
            </form>
        </div>
    <script src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" 
 crossorigin="anonymous"></script>
    </div>
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
    @session_start();
if(isset($_POST['user_login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry1="select * from user_data where user_name='$username'";
    $result=mysqli_query($conn,$qry1);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    if($row_count>0)
    {
       $_SESSION['username']=$username;
             $x=$_SESSION['username'];
        if(($password==$row_data['user_password']))
        {
            echo "<script>alert('login sucessessfully.$x')</script>";
            echo "<script>window.open('logsuc.php','_self')</script>";
            if(isset($_SESSION['username']))
            {
                "<script>window.open('homepage.php','_self')</script>";
               
            }
            else{
                "<script>window.open('logsuc.php','_self')</script>";
            }
        }
        else{
            echo "<script>alert('inalid password')</script>";
        }
    }
    else{
        echo "<script>alert('inalid username')</script>";
    }
} 
?>



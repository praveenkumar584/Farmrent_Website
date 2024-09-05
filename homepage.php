<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    
<section class="header">
        <nav class="logo">
            <a href="homepage.php"><img src="./images/logo.png"></a>
            <div class="menu">
                <ul>
                    <li><a href="#" class="home"style="background-color:#c08282; color:white">Home</a></li>
                    <li><a href="http://localhost/FARMRENT/about.php">About</a></li>
                    <li><a href="http://localhost/FARMRENT/services.php">Services</a></li>
                    <li><a href="http://localhost/FARMRENT/features.php">Features</a></li>
                    <li><a href="http://localhost/FARMRENT/feedback.php">Feedback</a></li>
                  </ul>
            </div>
        </nav>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <ul class="navbar-nav me-auto">
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
if(!isset($_SESSION['username'])){
    echo"<li class='nav-item'>
    <a class='nav-link active' href='#'><h3>Welcome</h3></a></li>";
}
 else if(!isset($_SESSION['username'])){
    echo"<li class='nav-item'><i class='bi bi-box-arrow-left'></i>
    <a class='nav-link active' href='#'><h3>login</h3></a></li>";
}
else{
    echo
    "<li class='nav-item'>
    <a class='nav-link active ' href='start.php'><h3> Logout</h3></a></li>";
}
?>
<?php

session_start();
?>
<?php
$_SESSION["username"] = "";
echo "<h2>".$_SESSION['username']."</h2>";
?>

</ul>
</nav>

            <div class="prav">
                <table>
                    <tr>
                <td><a href="http://localhost/FARMRENT/selection.php?" class="btn">GET STARTED  &#8594;</a></td>
            <td><a href=""><img src="./images/section1.png" class="col-1"></a></td>
</tr>
</table>
            </div>
    </section>
    <!----images-->
    <section class="second">
        <h1>&emsp;Categories</h1>
        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Various agriculture machines used in the farming are...!<br>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Rent a machine from near by 
            vendor who is ready to<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; provide a service for a low cost...$$</p>
        <div class="large">
            <div class="col-3">
                <img>
                <img src="./images/download (1).jpeg" class="img1">
                <img src="./images/download.jpeg" class="img2">
                <img src="./images/OIP (1).jpeg" class="img3">
                <br>
                <img>
                <img src="./images/OIP (2).jpeg" class="img4">
                <img src="./images/OIP (3).jpeg" class="img5">
                <img src="./images/OIP.jpeg" class="img6">
            </div>
        </div>
    </section>
    <div class="preview">
        <h1>&emsp;PREVIEW VIDEOS</h1>
        <div class="row">
             <table border-collapse="separate" border-color="grey" width="1420px"
             marign-left="50px" margin-right="50px" padding="20px" cellspacing="2px">
                <tr>
                <th>
            <div class="column">
              <video width="100%" autoplay controls height="50%">
                <source src="./images/production_id_4809803 (1080p).mp4">
              </video>
            </div>
            </th>
            <th>
            <div class="column">
                <video width="52%" autoplay controls height="50%">
                    <source src="./images/pexels-kenny-the-drone-10934916 (2160p).mp4">
                  </video>
            </div>
            </th>
        </tr>
            </table>
        </div>
    </div>
    <section></section>
<section class="background firstsection">
    <div class="box-main">
        <div class="firstHalf">	
            <p class="text-big">Contact Us</p>

            <p class="text-small">
                You can Contact Us if you face any problem
            </p>

            <br>
            <p class="center"
            style="text-decoration:none;
                    color:rgb(227, 136, 136);">
                Click on the below options to Contact us
            </p>

        </div>
    </div>
</section>
<section class="service">
    <h1 class="h-primary center"
        style="margin-top:30px;">
        Options to Contact
    </h1>
    <div id="service">
        <div class="box">
            <a href="query.php"><img src="./images/download (1).png"></a>
            <br>
            <p class="center">
                People can fill up the form and send us the problem
            </p>

        </div>
        <div class="box">
            <a href="mailto:gpraveen9870gmail.com">
            <img src="./images/download.png"></a>
            <br>
            <p class="center">
                Use this Email to send us about the problem faced
            </p>

        </div>
        <div class="box">
            <a href="https://web.whatsapp.com/">
            <img src="./images/download (2).jpeg"></a>
            <br>
            <p class="center">
                contact us on Whatsapp
            </p>

        </div>
    </div>
</section>
    <footer class="background">
    </footer>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100094477764654"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/GPravee21379787?s=09"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/_sai_pintu_2806_?igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/learning/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="foo">
      <p style="color:white;text-align:center;">
            Copyright @-All rights are reserved
            <br>G Praveen Kumar<br>K.Saikumar
        </p>
</div>
   </footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" 
 crossorigin="anonymous"></script>
</body>
</html>


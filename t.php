<html>
    <head>
        <title>
            end
</title>
<style>
body{
            background-color:#b0ddaf;
        }
        img
        {
            width:500px;
            height:500px;
           margin-left:410;
        }
        h1{
            margin-left:500px;
            color:#ea2320;
            color: lightblue;
            text-shadow: 5px 5px 30px blue;
            font-family:Georgia, 'Times New Roman', Times, serif;
            animation-name: repeat;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            font-weight: lighter;
            margin-left:420px;
        }
        .aaa
{
    margin-left:380px;
}

        @keyframes repeat {

    0% {color:#ea2320; text-shadow: 5px 5px 30px #ea2320;}
    20% {color: #1d22e8; text-shadow: 5px 5px 30px  #1d22e8;}
    40% {color: #22ce1e; text-shadow: 5px 5px 30px  #22ce1e;}
    60% {color: #22ce1e; text-shadow: 5px 5px 30px  #22ce1e;}
    80% {color: #1d22e8; text-shadow: 5px 5px 30px  #1d22e8;}
    100% {color: #ea2320; text-shadow: 5px 5px 30px  #ea2320;}
    }
    .btn
    {
    text-decoration: none;
    color: red;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
    margin-left:600px;
    border:10px;
    border-radius:5px;
    }
    .btn:hover{
    background: blue;
    color: white;
    }
    </style>
</head>
<body>
    <?php
    echo "<h1>Thank You for using our services</h1>";
    $host='localhost:3306';
    $user='root';
    $pass='';
    $dbname='praveen';
    $conn=mysqli_connect($host,$user,$pass,$dbname);
    if(!$conn)
    {
        die('could not connect:'.mysqli_error($conn));
    }
    ?>
    
    <img src="./images/rsz_1rsz_shutterstock_700905478.jpg"><br><br>
<a href="http://localhost/FARMRENT/homepage.php" class="btn">BACK</a>
</body>
</html>
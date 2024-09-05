<html>
    <head>
        <title>
            login successfully
</title>
<style>
body{
    min-height:105vh;
    width:100%;
    background-image:linear-gradient(rgba(4,9,20,0.5),rgba(4,9,20,0.5)),url(./images/bg1.jpg);
    background-position: center;
    background-size: cover;
    position:relative;
        }
        h1{
            margin-left:500px;
            color:#ea2320;
            font-size: 1.5rem;
            color: lightblue;
            text-shadow: 5px 5px 30px blue;
            font-family:Georgia, 'Times New Roman', Times, serif;
            animation-name: repeat;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            font-weight: lighter;
        }
        .aaa
{
    margin-left:380px;
}

        @keyframes repeat {

    0% {color:#acf9fb; text-shadow: 5px 5px 30px #acf9fb;}
    20% {color: #acf9fb; text-shadow: 5px 5px 30px  #acf9fb;}
    40% {color: #acf9fb; text-shadow: 5px 5px 30px  #acf9fb;}
    60% {color: #fbfaac; text-shadow: 5px 5px 30px  #fbfaac;}
    80% {color: #fbfaac; text-shadow: 5px 5px 30px  #fbfaac;}
    100% {color: #fbfaac; text-shadow: 5px 5px 30px  #fbfaac;}
    }
    .btn
    {
    text-decoration: none;
    color: #fbfbfc;
    font-size: 25px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
    margin-left:550px;
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
    <?php
    echo "<h1>Login sucessfully</h1>";
    $host='localhost:3306';
    $user='root';
    $pass='';
    $dbname='praveen';
    $conn=mysqli_connect($host,$user,$pass,$dbname);
    if(!$conn)
    {
        die('could not connect:'.mysqli_error($conn));
    }
    echo "<h1 class='aaa'>Welcome To .<b>.FARMrent.</b>.enjoy the services.<br></h1>";
    ?>
    <br><br>
<a href="http://localhost/FARMRENT/homepage.php" class="btn"><b>NEXT</b></a>
</body>
</html>


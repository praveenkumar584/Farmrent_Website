<html>
<body>
    <?php
    $host='localhost:3306';
    $user='root';
    $pass='';
    $dbname='praveen';
    $conn=mysqli_connect($host,$user,$pass,$dbname);
    if(!$conn)
    {
        //die('could not connect:'.mysqli_error());
        echo"connnected"
    }
    ?>
</body>
</html>
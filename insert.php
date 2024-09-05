<!DOCTYPE html>
<html>
    <head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="homepage.css">
        <title>sucess of uploading</title>
        <style>
            body{
            background-color:#bce7e9;
        }
        h1{
            margin-left:420px;
            color:#ea2320;
            font-size: 1.5rem;
            color: lightblue;
            text-shadow: 5px 5px 30px blue;
            font-family:Georgia, 'Times New Roman', Times, serif;
            animation-name: repeat;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            font-weight: lighter;
        }

        @keyframes repeat {

    0% {color:#9aa425; text-shadow: 5px 5px 30px #a26665;}
    20% {color:#19ed9c; text-shadow: 5px 5px 30px #1bef9e;}
    40% {color:#8c3e0f; text-shadow: 5px 5px 30px #8c3e0f;}
    60% {color:#e86513; text-shadow: 5px 5px 30px  #e66616;}
    80% {color: #30ae7e; text-shadow: 5px 5px 30px  #56b38f;}
    100% {color: #4b52a3; text-shadow: 5px 5px 30px  #7881e7;}
    }
    /*....
    ....
    */
    .content {
	position: relative;
}

.content p {
    margin-left:600px;
    margin-bottom: 80px;
	color: #fff;
	font-size: 40px;
	position: absolute;
	transform: translate(-50%, -50%);
}
.content p b{
    color:#2d9419;
}
.content p:nth-child(1) {
	color: transparent;
	-webkit-text-stroke: 2px #8f7d25;;
}

.content p:nth-child(2) {
	color: #8f7d25;
	animation: animate 4s ease-in-out infinite;
}

@keyframes animate {
	0%,
	100% {
		clip-path: polygon(
			0% 24%,
			8% 22%,
			16% 25%,
			27% 30%,
			40% 31%,
			44% 29%,
			30% 12%,
			50% 50%,
			0% 50%
		);
	}

	50% {
		clip-path: polygon(
			0% 30%,
			8% 35%,
			17% 33%,
			25% 31%,
			34% 25%,
			42% 22%,
			50% 23%,
			50% 50%,
			0% 50%
		);
	}
}
hr{
    size:30px;
    padding-left: 120px;
    color:black;

}
.col1 button
{
    text-decoration: none;
    color: #913215;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
    margin-left:500px;
    margin-top: 200px;
    border:10px;
    border-radius:5px;
}
    .col1 button:hover{
    background: #17ac14;
    color: white;
    }
    
    .btn
    {
    text-decoration: none;
    color: #35ca32;
    font-size: 18px;
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
        <script>
            function know()
            {
                document.location="recollection.php";
            }
        </script>
    </head>
    <body>
        <div>
            <br>
        <h1>Uploading is Successfull</h1><br>
        <br>
        <hr/>
        </div>
            <section>
                <div class="content">
                    <p align="center">To know the Progress of your Machine<B> SEE BELOW</B></p>
                    <p align="center">To know the Progress of your Machine<B> SEE BELOW</B></p>
                </div>
            </section><br><br><br><br>
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
?>
<table border="5" margin-left="20px">
<tr>
    <th>MACHINE-ID</th>
    <th>MACHINE-Owner</th>
    <th>Owner-Contact</th>
    <th>Owner-Mail</th>
    <th>MACHINE-NAME</th>
    <th>MACHINE-RATE</th>
    <th>BOOK</th>
</tr>
<?php
$qry2="select * from upload_data";
$result=mysqli_query($conn,$qry2);
  $count = 0;
  while($row = mysqli_fetch_assoc($result)) :
    $count++;
?><tr>
    <td><?php echo $row['machine_id'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['mobile'] ?></td>
    <td><?php echo $row['e_mail'] ?></td>
    <td><?php echo $row['machine'] ?></td>
    <td><?php echo $row['rate'] ?></td>
    <td><a href="booking.php">Click here</a></td>
<?php if($count % 2 == 0 || $count == mysqli_num_rows($result)) : ?>
  </tr>
<?php if($count != mysqli_num_rows($result)) : ?>
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>
</table>
<a href="t.php" class="btn">NEXT</a>
    </body>
</html>
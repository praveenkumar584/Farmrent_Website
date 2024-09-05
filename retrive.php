<html>
    <body>
        <head>
            <style>
                table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    align:center
  }
  th, td {
    padding: 10px;
  }
  th {
    background-color: #c7b09f;
    font-size: 20px;
    }
  td {
    background-color: #d6f9ee;
    }
            </style>
        </head>
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
<table border="5">
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
</body>
</html>

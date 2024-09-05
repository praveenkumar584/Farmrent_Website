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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-color: rgb(151, 168, 183);
}
.one{
  height:150px;
  width:150px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #a4bfc4;
  padding: 5px 20px 15px 20px;
  border: 2px solid rgb(200, 165, 165);
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 2px solid #896464;
  border-radius: 10px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #346587;
  text-decoration: none;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  margin-left: 30px;
  margin-bottom: 30px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 600px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
h2{
  text-align: center;
  
}
</style>
</head>
<body>

<h2>Payment Page</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Name">
            <label for="email"><i class="fa fa-envelope"></i>Email</label>
            <input type="text" id="email" name="email" placeholder="demo@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i>Address</label>
            <input type="text" id="adr" name="address" placeholder="address.....">
            <label for="city"><i class="fa fa-institution"></i>City</label>
            <input type="text" id="city" name="city" placeholder="city">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="state">
              </div>
              <div class="col-50">
                <label for="zip">Postal-pin</label>
                <input type="text" id="zip" name="zip" placeholder="501520">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment Details</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name of Card</label>
            <input type="text" id="cname" name="cardname" placeholder=" entr card Name or null if not">
            <label for="amount">Amount To be Pay</label>
            <input type="text" id="cname" name="amount" placeholder="Enter Amount">
            <label for="ccnum"> Card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="enter the number or null if not">
            <div class="row">
              <p>&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;
                &emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;
                &emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;
                &emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;&emsp14;(OR)  
                <br>using the Scanner(example:PhonePay,GooglePay,Paytm)</p>
            </div>
            <div>
              <img class="one"src="./images/scanner.jpg">
            <input type="submit" value="PAY" class="btn" name="pay">
            </div>
          </div>
          </div>
      </form>
    </div>
  </div>
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
if(isset($_POST['pay']))
{
    $v1=$_POST ["firstname"];
    $v2=$_POST ["email"];
    $v3=$_POST ["address"];
    $v4=$_POST ["city"];
    $v5=$_POST ["state"];
    $v6=$_POST ["zip"];
    $v7=$_POST ["cardname"];
    $v8=$_POST ["amount"];
    $v9=$_POST ["cardnumber"];
    if($v7=='null' and $v9=='null')
    {
        $sql1="insert into payment(name,email,address,city,state,postal,name_of_the_card,amount,card_number)
        values('$v1','$v2','$v3','$v4','$v5',$v6,'$v7',$v8,$v9)";
    if(mysqli_query($conn,$sql1));
    {
    echo "<script>alert('PAYMENT WAS SUCCESSFULL')</script>";
    echo "<script>window.open('onlinesuc.php','_self')</script>";
    }
}
else{
    $sql1="insert into payment(name,email,address,city,state,postal,name_of_the_card,amount,card_number)
        values('$v1','$v2','$v3','$v4','$v5',$v6,'$v7',$v8,$v9)";
    if(mysqli_query($conn,$sql1));
    {
    echo "<script>alert('PAYMENT WAS SUCCESSFULL')</script>";
    echo "<script>window.open('offlinesuc.php','_self')</script>";
    }
}
}
?>
</body>
</html>
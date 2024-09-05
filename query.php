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
    /* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color:blue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
  margin-left:450px;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
    </head>
    <body>
        <h1 align="center">QUERY FORM</h1>
    <div class="container">
  <form action="">
    <div class="row">
      <div class="col-25">
        <label for="firstname">Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lastname">E-Mail:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="e-mail">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mobile">Mobile:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="mobile" placeholder="phone number">
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="subject">Query</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write about your problem.....!" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="ask">
    </div>
  </form>
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
if(isset($_POST['ask']))
{
    $v1=$_POST ["firstname"];
    $v2=$_POST ["lastname"];
    $v3=$_POST ["mobile"];
    $v4=$_POST ["subject"];
        $sql1="insert into query(name,mail,mobile,subject)
        values('$v1','$v2',$v3,'$v4')";
    if(mysqli_query($conn,$sql1));
    {
    echo "<script>alert('Your request is Saved...!')</script>";
    }
}
?>

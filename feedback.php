<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
<style>
body {
font-family: Arial, sans-serif;
}
input[type=text], select, textarea {
width: 100%;
padding: 8px;
border: 1px solid #ccc;
border-radius: 4px;
margin-top: 4px;
margin-bottom: 10px;
}
input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 8px 12px;
border: none;
border-radius: 4px;
cursor: pointer;
}
.container {
width: 80%;
max-width: 500px;
margin: 0 auto;
border-radius: 6px;
background-color: #F2F2F2;
padding: 20px;
}
h3 {
text-align: center;
}
label {
font-weight: bold;
}
textarea {
resize: vertical;
}
.container {
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
input[type=submit]:hover {
background-color: #45a049;
}
</style>
</head>
<body>
<h3>We Value Your Suggestions!</h3>
<div class="container">
<form>
<label for="fname">First Name</label>
<input type="text" id="fname" name="firstname" placeholder="Enter your name">
<label for="lname">Last Name</label>
<input type="text" id="lname" name="lastname" placeholder="Enter your last name">
<label for="email">Email</label>
<input type="text" id="email" name="email" placeholder="Enter your email here">
<label for="subject">Suggestion</label>
<textarea id="subject" name="subject" placeholder="Provide your suggestion" style="height: 100px"></textarea>
<input type="submit" value="Submit">
</form>
</div>
</body>
</html>
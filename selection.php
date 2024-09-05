<!doctype html>
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
    referrerpolicy="no-referrer"/>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap');

body {

position: absolute;
background-size:100%;
top: 25%;
left: 50%;
transform: translate(-50%, -50%);
background-color:#cbf6e2
  
}
h1{
  
  font-size: 3.0rem;
  color: lightblue;
  text-shadow: 5px 5px 30px blue;
  font-family:Georgia, 'Times New Roman', Times, serif;
  animation-name: repeat;
  animation-duration: 2s;
  animation-iteration-count: infinite;
  font-weight: lighter;
}

@keyframes repeat {

0% {color: blue; text-shadow: 5px 5px 30px blue;}
20% {color: red; text-shadow: 5px 5px 30px  red;}
40% {color: green; text-shadow: 5px 5px 30px  green;}
60% {color: green; text-shadow: 5px 5px 30px  green;}
80% {color: red; text-shadow: 5px 5px 30px  red;}
100% {color: blue; text-shadow: 5px 5px 30px  blue;}

}


.input-container {
  position: relative;
  display: inline-block;
  width: 290px;
  height: 160px;
}

input[type="checkbox"] {
  display: none;
}

input[type="checkbox"]:checked + label {
  background-color: #888;
}

label {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: 5px;
  padding: 0 10px;
  color: #fff;
  text-align: center;
  line-height: 70px;
  background-color: #ccc;
  border-radius: 4px;
}

label:hover {
  cursor: pointer;
  -webkit-transition: background-color .3s ease;
  -moz-transition: background-color .3s ease;
  -ms-transition: background-color .3s ease;
  -o-transition: background-color .3s ease;
  transition: background-color .3s ease;
}

label:hover, input[type="checkbox"]:checked + label:hover {
  background-color: #555;
}

label span {
  display: inline-block;
  vertical-align: middle;
  line-height: normal;
}
img{
    margin-left:20px;
}

        </style>
        <script>
            $('form input[type="checkbox"]').click(function () {
  var label = $('label[for="'+$(this).attr('id')+'"]');
  $(label).animate({ 'margin': '0' }, 100);
  $(label).animate({ 'margin': '5px' }, 100);
});
            </script>
</head>
<body>
    <h1 align="center">Select Your Option </h1>
<div>
  <form action="">
    <div class="input-container">
      <a href="upload.php">
      <label for="1"><span style="color:red">Click here to Give <b> RENT</b></span>
      <img src="./images/download (4).jpg" style="width:200px;height:200px"></label></a>
    </div>
    <div class="input-container">
      <a href="list.php">
      <label for="2"><span style="color:blue">Click here to <b>Take</b> RENT</span>
      <img src="./images/OIP (3).jpg" style="width:200px;height:200px"></label></a>
    </div>
  </form>
  
</div>
</body>
</html>
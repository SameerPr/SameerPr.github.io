<!DOCTYPE HTML>
<html>
<head>
	<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styling.css" >
  <title>SAMEER PRAJAPATI</title>
   <link rel="icon" href="batman.png" type="image/png">
   <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

</head>
<body class="bgimg" >
<div class="topbar">
<h2 id="name">Sameer Prajapati</h2>
</div>
<div>
 <ul id="cssmenu">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Me</a></li>
        <li><a href="academics.html">Academics</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="team.html">CS 251 Team</a></li>
        <li ><a href="contact.html">Contact Me</a></li>
        <li class='active'><a href="feedback.html">Feedback</a></li>
</ul>
</div><!--cssmenu end-->


 <div class="form"> 
    <form method="POST" action="helloworld.php"> 
    <h3> Drop A Message: </h3>
      <p> <label for="name" >Full Name: </label>
      <input type="text" name="name" placeholder="Enter your name here.." required> </p>
      <p><label for="email">Email ID:</label>
      <input type="text" name="email" placeholder="Enter your email here" required>
      </p>
    <p><label for="comment" class="form-label">Comment here:</label>
   <textarea name="comment" rows="3" cols="25" placeholder="Type something here.." required></textarea>  </p>
      <p align="center">
  <input type="submit" name="submit" value="Submit">
    </p>        
      </form>
      </div>
<div class="socialmedia ">
  
</div>

</body>
</html>

<?php
include('hitcounter.php');
echo "No of views - $views \r\n" ;

$filename = 'feedback.txt';
if (isset($_POST['submit'])){
	$data = $_POST['name'] . '-' . $_POST['email'] . '-' . $_POST['comment'] . "\r\n";
    $ret = file_put_contents($filename , $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>
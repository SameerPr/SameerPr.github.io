<!DOCTYPE html>
<html>
<body>
<?php
$data_file = fopen("example.txt","w");

if (isset($_POST['submit'])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$comment = $_POST["comment"] ;
	$text = $name. " " .$email. " " $comment."\n" ;
}
fputs($data_file, $text);
fclose($data_file);
?>

</body>
</html>
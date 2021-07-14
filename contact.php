<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');


$con = mysqli_connect('localhost', 'root', '','v2exports');
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['subject'];
$txtMessage = $_POST['message'];
$sql = "INSERT INTO `contact-us` (`Name`, `Email`, `Subject`, `Message`) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";
// redirect to success page
$rs = mysqli_query($con, $sql);

if($rs)
{
	header("Location: contact-us.html");
}

?>
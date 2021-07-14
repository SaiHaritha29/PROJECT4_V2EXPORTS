<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');


$con = mysqli_connect('localhost', 'root', '','v2exports');
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtcomporsales = $_POST['comporsales'];
$txtcompname = $_POST['compname'];
$txtaddress = $_POST['address'];
$txtMessage = $_POST['message'];
$sql = "INSERT INTO `bulk` (`Name`, `Email`, `Phone`,`comporsales`,`compname`,`compaddress`, `message`) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtcomporsales', '$txtcompname', '$txtaddress', '$txtMessage')";

// redirect to success page
$rs = mysqli_query($con, $sql);

if($rs)
{
	header("Location: thank.html");
}

?>
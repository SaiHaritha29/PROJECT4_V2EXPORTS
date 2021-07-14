<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');


$con = mysqli_connect('localhost', 'root', '','v2exports');
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtAddress = $_POST['address'];
$sql = "INSERT INTO `productorder` (`Name`, `Email`, `Phone`,`address`) VALUES ('$txtName', '$txtEmail', '$txtPhone','$txtAddress')";

// redirect to success page
$rs = mysqli_query($con, $sql);

if($rs)
{
	header("Location: thank.html");
}

?>
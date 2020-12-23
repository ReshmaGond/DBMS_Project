<?php
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$p_number=$_POST['p_number'];
$email=$_POST['email'];
$password=$_POST['password'];

//connection
$conn= new mysqli("localhost","root","","management");
if($conn->connect_error){
	die("Failed to Connect: ".$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into registration(first_name,last_name,p_number,email,password)
	values(?,?,?,?,?)");
	$stmt->bind_param("ssiss",$first_name,$last_name,$p_number,$email,$password);
	$stmt->execute();
	echo "Registration Successful...";
	$stmt->close();
	$conn->close();
}



?>
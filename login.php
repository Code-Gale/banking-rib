<?php 
include "connection.php";
	$username = $_GET["username"];
	$pasword = $_GET["pasword"];


    $name = $_GET["name"];
	$nic = $_GET["nic"];
	$email = $_GET["email"];
	$contact_number = $_GET["contact_number"];

    $sql1= "SELECT username FROM login WHERE username ='$username'" ;
	$result1=$conn->query($sql1);
	$num = mysqli_num_rows($result1);

	if($num==1)
	{
		header ("location: index-4.php");
	}
	else
	{
	if($pasword!="" && $username!=""){
	$sql = "insert into  personal (id,nic,name,email,contact_number) values (NULL,'$nic','$name','$email','$contact_number')";
	$result=$conn->query($sql);

	echo "Successfully Submitted";
	

	//if($pasword!="" && $username!=""){
	
	$sql = "insert into login (id,username,pasword) values (NULL,'$username','$pasword')"; 
	$result=$conn->query($sql);

	if($pasword!="" && $username!=""){
		header ("location: index-3.php");
	}
	echo "inserted";
	}
}

?>
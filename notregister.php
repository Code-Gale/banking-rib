<?php

<?php


include "connection.php";
//include "login.php";
	$username = $_GET["username"];
	$pasword = $_GET["pasword"];
	$name = $_GET["name"];
	$nic = $_GET["nic"];
	$email = $_GET["email"];
	$contact_number = $_GET["contact_number"];
echo"$username";
	
/*
if($pasword!="" && $username!=""){
	$sql = "INSERT INTO personal (id,nic,name,email,contact_number) VALUES (NULL,$nic','$name','$email','$contact_number')";
	$result=$conn->query($sql);

	echo "Successfully Submitted";
}

if($pasword!="" && username!=""){
	$sql = "insert into login (id,username,pasword) values(NULL,'$username','$pasword')"; 
	$result=$conn->query($sql);

	while($row = $result->fetch_assoc())
	{
		header ("location: index.html");
	}
	echo "inserted";
}*/

?>
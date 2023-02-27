<?php
include "connection.php";

	$accnmbr = $_GET["AccountNumber"];
	$username = $_GET["username"];
	$money = $_GET["money"];
	$acc = $_GET["acc"];
echo "$acc";

if($accnmbr !="" && $username !="" ){
	$sql = "insert into  deposit (username,money,acc,acc_number) values ('$accnmbr','$username','$money','$acc','$accnmbr')";
	$result=$conn->query($sql);

	while($row = $result->fetch_assoc())
	{
		header ("location: index.html");
	}

	$sql1 = "SELECT sum(distinct) from deposit where acc_number='$accnmbr'";
	$result=$conn->query($sql1);
}



?>
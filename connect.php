<?php
/*diclare variable*/

$host="localhost";
$usere_name="root";
$pasword="usbw";
$tabase_name="test";


/*make connection to database*/
$conn = new mysqli($host,$usere_name,$pasword,$database_name);
if($conn->connect_errno)
echo"connection failed";

?>
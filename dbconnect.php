<?php
$mysqli= mysqli_connect("localhost","root","");
// Check connection
if (mysqli_connect_errno())
{
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// ...some PHP code for database "my_db"...
// Change database to "test"
mysqli_select_db($mysqli,"dbtest");
//echo "ddd";
// ...some PHP code for database "test"...
?>

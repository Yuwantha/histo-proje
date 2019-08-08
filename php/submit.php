<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

else
{
	$Name = $_POST["name"];
	$Email = $_POST["email"];
	$Telephone = $_POST["tel"];
	$URL = $_POST["url"];
	$Message = $_POST["msg"];

	$query = "INSERT INTO form Values ('$Name','$Email','$Telephone','$URL','$Message')";

		if ($conn->query($query)) 
		{
			header("Location: http://localhost/Web Project/index.html" , true, 301);			
		}

		else
		{
			echo "Error";
		}
}

?>
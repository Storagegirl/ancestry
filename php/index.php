<!DOCTYPE html>
<html>
<body>

<h1>My First select * from table</h1>

<?php

$servername = "mysql.localhost";
$username = "root";
$password = "root";
$db_name = "ancestry";

//Create connection
$connection = new mysqli($servername, $username, $password, $db_name);

$select = "SELECT * FROM members";
$result = $connection->query($select);

while($row = $result->fetch.assoc()) {
	echo "Name: ".$name["name"]."<br>Sex: ".$sex["sex"]."<br>Birth: ".$birth ["birth"]."<br>Death: ".$death["death"];
}

?>

</body>
</html>


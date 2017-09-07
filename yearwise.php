<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<title>Add Employee</title>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "population";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$year = $_POST["year"];
//echo "$year";
$sql = "SELECT id, name, Property_details , lat , longi , year1 FROM details where year1 = ".$year." ";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
	echo "<table>";
			echo"<tr>";
				echo"<th>Id</th>";
				echo"<th>Name</th>";
				echo"<th>Property Details</th>";
				echo"<th>Latitude</th>";
				echo"<th>Longitude</th>";
				echo"<th>Year</th>";
				echo"<th>View on Map</th>";
			echo"</tr>";
		
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["Property_details"]."</td>";
			echo "<td>".$row["lat"]."</td>";
			echo "<td>".$row["longi"]."</td>";
			echo "<td>".$row["year1"]."</td>";
		  echo "</tr>";
    }
	
	echo"</table>";	
} else {
    echo "0 results";
}
$conn->close();
?> 
</body>
</html>
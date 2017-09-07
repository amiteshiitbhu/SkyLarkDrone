<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
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
echo "Connected successfully";

// create a variable
//$id = $_POST["id"];
$name = $_POST["name"];
$description = $_POST["description"];
$lat = $_POST["lat"];
$longi = $_POST["long"];
$year1 = $_POST["year"];

//Execute the query
 

$sql = " INSERT INTO details (name, Property_details, lat, longi, year1)
        VALUES ('$name','$description','$lat','$longi','$year1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//header("Location: " . "http://" . $_SERVER['HTTP_HOST'] .localhost/Category/Project/index.html);
$conn->close();
?>
<form method="post" action="index.html">
<button type="submit"  >Add Details of the City</button>

</form>

</body>
</html>
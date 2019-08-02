
<?php
$servername = "121.200.55.60:3307";
$username = "191cs123";
$password = "191cs123";
$database = "191cs123";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT id, sname FROM mytable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["sname"]. " " . "<br>";
    }
} else {
    echo "0 results";
}

?>

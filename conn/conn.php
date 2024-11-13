<?php
// Database credentials
$servername = "your_database_host"; // Replace with your Hostinger hostname
$username = "u598048325_root";
$password = "2yJ@kqOwC#";
$dbname = "u598048325_em_furniture";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Example query to retrieve data from a table
$sql = "SELECT * FROM your_table_name"; // Replace 'your_table_name' with your actual table name

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>"; 
    // Replace 'id' and 'name' with the actual column names in your table
  }
} else {
  echo "0 results";
}

$conn->close();
?>
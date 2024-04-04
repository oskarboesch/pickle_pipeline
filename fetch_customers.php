<?php
// Database connection parameters
$servername = "127.0.0.1:3307"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "Pickle_Pipeline"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize an array to hold the task data
$customerData = [];

// SQL query to retrieve task data
$sql = "SELECT * FROM Customer";
$result = $conn->query($sql);

// Fetch task data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $customerData[] = $row;
    }
} else {
    echo "0 results";
}

// Close the result set
$result->close();

// Close the database connection
$conn->close();

// Return the task data as JSON
echo json_encode($customerData);
?>

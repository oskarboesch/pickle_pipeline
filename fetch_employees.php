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

// Initialize an array to hold the employee data
$employeeData = [];

// SQL query to retrieve employee data
$sql = "SELECT * FROM Employee";
$result = $conn->query($sql);

// Fetch employee data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $employeeData[] = $row;
    }
} else {
    echo "0 results";
}

// Close the result set
$result->close();

// Close the database connection
$conn->close();

// Return the employee data as JSON
echo json_encode($employeeData);
?>

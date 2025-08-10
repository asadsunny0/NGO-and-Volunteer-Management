<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_ngo"; // Your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Required fields
$required_fields = ['name', 'email', 'reason'];
foreach ($required_fields as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        die("Error: Missing required field '$field'");
    }
}

// Assign form values
$name   = $_POST['name'];
$email  = $_POST['email'];
$reason = $_POST['reason'];

// Prepare SQL
$sql = "INSERT INTO tb_volunteers (Name, Email, Reason) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

// Bind parameters (all strings → sss)
$stmt->bind_param("sss", $name, $email, $reason);

// Execute
if ($stmt->execute()) {
    echo "<h3>Volunteer registered successfully!</h3>";
} else {
    echo "Error: " . $stmt->error;
}

// Close
$stmt->close();
$conn->close();
?>

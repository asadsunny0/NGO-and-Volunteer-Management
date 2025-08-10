<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_ngo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Validate input
$required = ['event_name', 'event_date', 'event_type'];
foreach ($required as $field) {
    if (empty($_POST[$field])) {
        die("Error: $field is required");
    }
}

$event_name = $_POST['event_name'];
$event_date = $_POST['event_date'];
$event_type = $_POST['event_type'];
$description = $_POST['description'] ?? '';

// Prepare and insert
$sql = "INSERT INTO tb_events (EventName, EventDate, Description, EventType) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
  die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("ssss", $event_name, $event_date, $description, $event_type);
if ($stmt->execute()) {
  echo "<h3>Event created successfully!</h3>";
} else {
  echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>

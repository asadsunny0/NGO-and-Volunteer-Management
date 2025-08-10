<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_ngo";  // Your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate POST data before using it
$required_fields = ['donor_id', 'amount', 'date', 'payment_mode', 'cause', 'project_id', 'DonorName'];
foreach ($required_fields as $field) {
    if (!isset($_POST[$field]) || $_POST[$field] === '') {
        die("Error: Missing required field '$field'");
    }
}

// Assign form values safely
$donor_id     = (int) $_POST['donor_id'];
$amount       = (float) $_POST['amount'];
$date         = $_POST['date'];  // Expecting YYYY-MM-DD format
$payment_mode = $_POST['payment_mode'];
$cause        = $_POST['cause'];
$project_id   = (int) $_POST['project_id'];
$DonorName    = $_POST['DonorName'];

// Prepare SQL with placeholders
$sql = "INSERT INTO tb_donations 
        (DonorID, Amount, Date, PaymentMode, Cause, ProjectID, DonorName)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

// Bind parameters (7 variables → 7 type specifiers)
$stmt->bind_param("idsssis", 
    $donor_id, 
    $amount, 
    $date, 
    $payment_mode, 
    $cause, 
    $project_id, 
    $DonorName
);

// Execute and check result
if ($stmt->execute()) {
    echo "<h3>Donation recorded successfully!</h3>";
} else {
    echo "Error: " . $stmt->error;
}

// Clean up
$stmt->close();
$conn->close();
?>

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

$sql = "SELECT  Name, Email, reason FROM tb_volunteers";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Volunteer List</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f4f4f4; }
        table { border-collapse: collapse; width: 80%; margin: auto; background: white; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>
<h2 style="text-align:center;">Volunteer Information</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>reason</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['Name']}</td>
                    <td>{$row['Email']}</td>
                    <td>{$row['reason']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No volunteers found</td></tr>";
    }
    $conn->close();
    ?>
</table>
</body>
</html>

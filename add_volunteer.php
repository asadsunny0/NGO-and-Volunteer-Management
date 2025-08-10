<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Volunteer</title>
  <style>
    body { font-family: Arial; background: #f4f4f4; padding: 20px; }
    form { background: white; padding: 20px; max-width: 400px; margin: auto; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    input, textarea { width: 100%; padding: 8px; margin: 8px 0; }
    input[type="submit"] { background: #4CAF50; color: white; border: none; cursor: pointer; }
    input[type="submit"]:hover { background: #45a049; }
  </style>
</head>
<body>
  <h2 style="text-align:center;">Register as a Volunteer</h2>
  <form action="volunteer.php" method="POST">
    
    <label>Your Name:</label>
    <input type="text" name="name" required>

    <label>Email Address:</label>
    <input type="email" name="email" required>

    <label>Reason for Volunteering:</label>
    <textarea name="reason" rows="4" required></textarea>

    <input type="submit" value="Register">
  </form>
</body>
</html>

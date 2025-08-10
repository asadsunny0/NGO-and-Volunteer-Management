<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Create Event</title>
  <style>
    body { font-family: Arial; background: #f4f4f4; padding: 20px; }
    form { background: white; padding: 20px; max-width: 400px; margin: auto; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    input, textarea, select { width: 100%; padding: 8px; margin: 8px 0; }
    input[type="submit"] { background: #4CAF50; color: white; border: none; cursor: pointer; }
    input[type="submit"]:hover { background: #45a049; }
  </style>
</head>
<body>
  <h2 style="text-align:center;">Create a New Event</h2>
  <form action="save_event.php" method="POST">
    <label>Event Name:</label>
    <input type="text" name="event_name" required>

    <label>Event Date:</label>
    <input type="date" name="event_date" required value="<?php echo date('Y-m-d'); ?>">

    <label>Event Type:</label>
    <select name="event_type" required>
      <option value="Donation">Donation</option>
      <option value="Volunteer">Volunteer</option>
    </select>

    <label>Description:</label>
    <textarea name="description" rows="4"></textarea>

    <input type="submit" value="Create Event">
  </form>
</body>
</html>


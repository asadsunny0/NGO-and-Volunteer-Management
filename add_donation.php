<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Make a Donation</title>
  <style>
    body { font-family: Arial; background: #f4f4f4; padding: 20px; }
    form { background: white; padding: 20px; max-width: 400px; margin: auto; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    input, select { width: 100%; padding: 8px; margin: 8px 0; }
    input[type="submit"] { background: #4CAF50; color: white; border: none; cursor: pointer; }
    input[type="submit"]:hover { background: #45a049; }
  </style>
</head>
<body>
  <h2 style="text-align:center;">Make a Donation</h2>
  <form action="donation.php" method="POST">
    <label>Donor Name:</label>
    <input type="text" name="DonorName" required>

    <label>Donor ID:</label>
    <input type="number" name="donor_id" required>

    <label>Amount:</label>
    <input type="number" step="0.01" name="amount" required>

    <label>Date:</label>
    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>

    <label>Payment Mode:</label>
    <select name="payment_mode" required>
      <option value="cash">Cash</option>
      <option value="bank">Bank</option>
      <option value="bkash">Bkash</option>
      <option value="nogod">Nogod</option>
    </select>

    <label>Cause:</label>
    <input type="text" name="cause" required>

    <label>Project ID:</label>
    <input type="number" name="project_id" required>

    <input type="submit" value="Donate">
  </form>
</body>
</html>

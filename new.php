<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NGO Donation & Volunteer Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #4CAF50;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      background-color: #333;
    }

    nav a {
      color: white;
      padding: 14px 20px;
      text-decoration: none;
      text-align: center;
    }

    nav a:hover {
      background-color: #575757;
    }

    .container {
      padding: 20px;
    }

    .card {
      background-color: white;
      padding: 15px;
      margin: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 10px;
    }
  </style>
</head>
<body>

  <header>
    <h1>NGO Donation & Volunteer Management System</h1>
  </header>

  <nav>
    <a href="Donors.php">Donors</a>
    <a href="add_donation.php">Donations</a>
    <a href="add_volunteer.php">Volunteers</a>
    <a href="add_event.php">Events</a>
    <a href="#">Volunteer-Event Assignments</a>
    <a href="#">Projects</a>
    <a href="#">Expenses</a>
  </nav>

  <div class="container">
    <h2>Welcome to Our Management System</h2>
    <p>Select a section from the navigation bar above to manage records.</p>

    <div class="grid">
      <div class="card">
        <h3>Donors</h3>
        <p>View, add, or manage donor information.</p>
      </div>
      <div class="card">
        <h3>Donations</h3>
        <p>Track and record donations made by donors.</p>
      </div>
      <div class="card">
        <h3>Volunteers</h3>
        <p>Manage volunteer details and availability.</p>
      </div>
      <div class="card">
        <h3>Events</h3>
        <p>Create and view events for donations and volunteering.</p>
      </div>
      <div class="card">
        <h3>Volunteer-Event Assignments</h3>
        <p>Assign volunteers to events and track participation.</p>
      </div>
      <div class="card">
        <h3>Projects</h3>
        <p>Manage NGO projects funded through donations.</p>
      </div>
      <div class="card">
        <h3>Expenses</h3>
        <p>Log and monitor project-related expenses.</p>
      </div>
    </div>
  </div>

</body>
</html>

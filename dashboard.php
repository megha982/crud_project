<?php 
include("auth.php"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 80px);
        }

        .dashboard-card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
            text-align: center;
            width: 350px;
        }

        .dashboard-card h2 {
            color: #333;
            margin-bottom: 30px;
        }

        .dashboard-card a {
            display: block;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            font-size: 16px;
            transition: 0.3s;
        }

        .dashboard-card a:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

<div class="header">
    Admin Dashboard
</div>

<div class="container">
    <div class="dashboard-card">
        <h2>Welcome, Admin</h2>
        <a href="add_user.php">Add User</a>
        <a href="view_users.php">View Users</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>
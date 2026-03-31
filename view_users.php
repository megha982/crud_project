<?php
include("auth.php");
include("config.php");

$result = mysqli_query($conn, "SELECT * FROM userinfo");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 5px;
            color: white;
            margin: 2px;
            font-size: 14px;
        }

        a.edit {
            background-color: #28a745;
        }

        a.edit:hover {
            background-color: #218838;
        }

        a.delete {
            background-color: #dc3545;
        }

        a.delete:hover {
            background-color: #c82333;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<h2>All Users</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['user_id']; ?></td>
        <td><?php echo $row['full_name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td>
            <a class="edit" href="edit_user.php?id=<?php echo $row['user_id']; ?>">Edit</a>
            <a class="delete" href="delete_user.php?id=<?php echo $row['user_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a class="back-link" href="dashboard.php">Back to Dashboard</a>

</body>
</html>
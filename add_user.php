<?php
include("auth.php");
include("config.php");

$message = "";

if(isset($_POST['submit'])){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO userinfo (full_name, email, phone, address)
              VALUES ('$name', '$email', '$phone', '$address')";

    if(mysqli_query($conn, $query)){
        $message = "User Added Successfully";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #218838;
        }

        .message {
            text-align: center;
            margin-bottom: 15px;
            color: green;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<div class="form-container">
    <h2>Add New User</h2>

    <?php if($message != ""){ ?>
        <div class="message"><?php echo $message; ?></div>
    <?php } ?>

    <form method="POST">
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone">
        <textarea name="address" placeholder="Address"></textarea>
        <button name="submit">Add User</button>
    </form>

    <a href="dashboard.php">Back to Dashboard</a>
</div>

</body>
</html>
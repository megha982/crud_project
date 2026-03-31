<?php
include("auth.php");
include("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM userinfo WHERE user_id=$id");
$row = mysqli_fetch_assoc($result);

$message = "";

if(isset($_POST['update'])){
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if(mysqli_query($conn, "UPDATE userinfo SET
        full_name='$name',
        email='$email',
        phone='$phone',
        address='$address'
        WHERE user_id=$id")){
        $message = "User Updated Successfully";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
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
            background-color: #ffc107;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #e0a800;
        }

        .message {
            text-align: center;
            margin-bottom: 15px;
            color: green;
            font-weight: bold;
        }

        a.back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }

        a.back-link:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit User</h2>

    <?php if($message != "") { ?>
        <div class="message"><?php echo $message; ?></div>
    <?php } ?>

    <form method="POST">
        <input type="text" name="full_name" placeholder="Full Name" value="<?php echo $row['full_name']; ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" required>
        <input type="text" name="phone" placeholder="Phone" value="<?php echo $row['phone']; ?>">
        <textarea name="address" placeholder="Address"><?php echo $row['address']; ?></textarea>
        <button name="update">Update User</button>
    </form>

    <a class="back-link" href="view_users.php">Back to Users List</a>
</div>

</body>
</html>
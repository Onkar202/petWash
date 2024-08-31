<?php
session_start();
require 'db.php'; // Assumes the 'db.php' file contains the database connection
if (isset($_POST['add'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    // Prepare the SQL statement with placeholders
    $stmt = $pdo->prepare("INSERT INTO admin_users (username, password) VALUES (:username, :password_hash)");

    // Bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password_hash', $hashed_password);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "User inserted successfully.";
    } else {
        echo "Failed to insert user.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <input type="submit" name="add">
    </form>
</body>
</html>
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: login.php');
    exit;
}

// Include the database connection file
require 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin</h2>
            <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="messeges.php">Messages</a></li>
                <li><a href="appoinment.php">Appointments</a></li>
                <li><a href="pets_buying.php">Pets Buying</a></li>
                <li><a href="consultation.php">Consultation</a></li>
                <li><a href="logout.php">Logout</a></li> </ul>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h2>Welcome</h2>

            
            
            <!-- Appointments Section -->
            <div class="section">
                <h3>Appointments</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Sr_no</th>
                            <th>Client</th>
                            <th>Service</th>
                            <th>Pet</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch upcoming appointments from the database
                        $stmt = $pdo->query("SELECT * FROM service where Date");
                        while ($appointment = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>{$appointment['sr_no']}</td>";
                            echo "<td>{$appointment['Name']}</td>";
                            echo "<td>{$appointment['Service_name']}</td>";
                            echo "<td>{$appointment['Pet']}</td>";
                            echo "<td>{$appointment['Mobile_No']}</td>";
                            echo "<td>{$appointment['Email']}</td>";
                            echo "<td>{$appointment['Address']}</td>";
                            echo "<td>{$appointment['Date']}</td>";
                            echo "<td>{$appointment['Time']}</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

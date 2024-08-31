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

            
            
            <!-- Consultation Section -->
            <div class="section">
                <h3>Uppocomming Consultations</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Sr_no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Id</th>
                            <th>Pet Name</th>
                            <th>Pet Type</th>
                            <th>Consultation Type</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $today = date("Y-m-d");
                        // Fetch recent messages from the database
                        $stmt = $pdo->query("SELECT * FROM consultant");
                        while ($message = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>{$message['sr_no']}</td>";
                            echo "<td>{$message['name']}</td>"; 
                            echo "<td>{$message['email']}</td>";
                            echo "<td>{$message['phone']}</td>";
                            echo "<td>{$message['pet_name']}</td>";
                            echo "<td>{$message['pet_type']}</td>";
                            echo "<td>{$message['consultation_type']}</td>";
                            echo "<td>{$message['date']}</td>";
                            echo "<td>{$message['time']}</td>";
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

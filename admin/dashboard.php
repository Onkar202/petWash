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
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h2>Welcome to the Admin Dashboard</h2>

            <!-- Messages Section -->
            <div class="section">
                <h3>Recent Messages</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Sr_no</th>
                            <th>Sender</th>
                            <th>Message</th>
                            <th>Email Id</th>
                            <th>Mobile No</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $today = date("Y-m-d");
                        // Fetch recent messages from the database
                        $stmt = $pdo->query("SELECT * FROM contact_us WHERE DATE(Date)>='$today'");
                        while ($message = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>{$message['sr_no']}</td>";
                            echo "<td>{$message['Name']}</td>";
                            echo "<td>{$message['Message']}</td>";
                            echo "<td>{$message['Email']}</td>";
                            echo "<td>{$message['Mobile_No']}</td>";
                            echo "<td>{$message['Date']}</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Appointments Section -->
            <div class="section">
                <h3>Upcoming Service Appointments</h3>
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
                        $stmt = $pdo->query("SELECT * FROM service WHERE date >= CURDATE() ORDER BY date, time LIMIT 5");
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
                        $stmt = $pdo->query("SELECT * FROM consultant where date >= '$today'");
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
            


            <div class="section">
                <h3>Pets Purchesed</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Pet Type</th>
                            <th>Pet Breed</th>
                            <th>Address</th>
                            <th>Booking Date</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $today = date("Y-m-d");
                        // Fetch recent messages from the database
                        $stmt = $pdo->query("SELECT * FROM petbuying ORDER BY id DESC LIMIT 5");
                        while ($message = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>{$message['id']}</td>";
                            echo "<td>{$message['buyer_name']}</td>";
                            echo "<td>{$message['email']}</td>";
                            echo "<td>{$message['phone']}</td>";
                            echo "<td>{$message['pet_type']}</td>";
                            echo "<td>{$message['pet_breed']}</td>";
                            echo "<td>{$message['Address']}</td>";
                            echo "<td>{$message['Booking_date']}</td>";
                            echo "<td>{$message['price']}</td>";
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinarian Consultation Booking Form</title>
    <style>
        /* Basic styling for better presentation */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select,
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] , button{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .btns{
            display: flex;
    gap:5px;
    width: 7%;
    margin-left: 167px;
    color: white;
    

        }

        button{
            padding:10px;
            
        }
        button a{
            text-decoration: none;
            color: white;
        }
    </style>
   
</head>

<body>

    <h2>Veterinarian Consultation Booking Form</h2>

    <form action="#" method="post">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="petname">Pet's Name:</label>
        <input type="text" id="petname" name="petname" required>

        <label for="pettype">Pet's Type:</label>
        <input type="text" id="pettype" name="pettype" required>

        <label for="pet">Select Consultation Type:</label>
        <select id="consulant" name="consulant">
            <option value="Online">Online</option>
            <option value="Home visit">Home visit</option>
        </select>

        <label for="appointmentdate">Preferred Appointment Date:</label>
        <input type="date" id="appointmentdate" name="appointmentdate" required>
        <br>
        <label for="message">Additional Message (if any):</label>
        <textarea id="message" name="message" rows="4"></textarea>

        
        <div class="btns">
        <input type="submit" value="Book Consultation" name="send">
        <button><a href="index.html">Go to Home</a></button>
        </div>
    </form>

    <?php

       
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send'])){
    $pet = $_POST['petname'];
    $breed = $_POST['pettype'];
    $name = $_POST['fullname'];
    $mobile=$_POST['phone'];
    $email = $_POST['email'];        
    $consultant_type = $_POST['consulant'];         
    $appoinment_date = $_POST['appointmentdate'];  
    $message = $_POST['message']; 

    
    
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($server,$username,$password);

    if(!$con){
      die("Connection failes".$mysqli_connect_error());
  }
      
    $sql1 = "SELECT sr_no FROM pet_wash.consultant WHERE sr_no = (SELECT MAX(sr_no) FROM pet_wash.consultant)";
    // Execute the query and get the result object
    $result = $con->query($sql1);    
 //    Check for query errors  
    $sr_no=1;
    if($result == TRUE){
        $row = $result->fetch_assoc();    
        // Store the value of the column in a variable
        $sr_no = $row["sr_no"];    
        $sr_no = $sr_no + 1;
        
    }else{
        $sr_no = 1;
    }   
    
    // Free the result object and close the connection
    $result->free();



 
  $t1 = date('H:i:s',strtotime("9:00:00"));
  $t2 = date('H:i:s',strtotime("21:00:00"));
 
  // Fetch recent messages from the database
  $stmt = "SELECT * FROM pet_wash.consultant ORDER BY sr_no DESC LIMIT 1";
  $cn_time = $con->query($stmt);  
  $new_appoinment_time= date('H:i:s',strtotime("9:00:00"));
  $row = false;
  $last_appoinment_date = date("Y-m-d");
  $ctime = date("H:i:s");
  if($cn_time){
    $row = $cn_time->fetch_assoc(); 
    $last_appoinment_time = $row['time'];
    $last_appoinment_date = $row['date'];
    if($last_appoinment_time >= $t1 && $last_appoinment_time < $t2){
        $new_appoinment_time = date('H:i:s',strtotime($last_appoinment_time."+1 hour"));               
    }  
    else{
        $last_appoinment_date = date("Y-m-d",strtotime($d." +1 day"));
    }
}

if($appoinment_date < $last_appoinment_date && !($last_appoinment_time >= $t1 && $last_appoinment_time < $t2)){
    echo "<script>alert('All Session are booked That day Please select different Date')</script>";
}else{

    
  $cn_time->free();
  
  

       $sql_query = "INSERT INTO `pet_wash`.`consultant`(`sr_no`,`name`,	`email`,	`phone`,	`pet_name`,	`pet_type`	,`consultation_type`,	`prefered_date`,	`date`, `message`,`time`	)
       VALUES('$sr_no','$name','$email','$mobile','$pet','$breed','$consultant_type','$appoinment_date','$last_appoinment_date','$message','$new_appoinment_time');";
       $result = $con->query($sql_query);
    //    $result = $con->query($sql_query);
    //    $result->free();
    // $result->free();
       $con->close();    

    
}
    // Example usage:    

    function isValidEmail($email) {
        // Use PHP's built-in filter_var function with FILTER_VALIDATE_EMAIL flag
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    
    // Example usage:
    
    if (isValidEmail($email)) {
   
            
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $maill = new PHPMailer(true);
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ronyk010201@gmail.com';                     //SMTP username
        $mail->Password   = 'jvib ggwl mina ywuj';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('ronyk010201@gmail.com', 'Shop');
        $mail->addAddress('ronyk010201@gmail.com', 'User');     //Add a recipient
    

        //Content
        $mail->isHTML(true);                                
        $mail->Subject = 'New Consultant booked';
        $mail->Body    = "Name = $name<br>
        Mobile = $mobile<br>
        Email = $email<br>
        Message = $message<br>
        Pet Name = $pet<br>
        Pet Type = $breed<br>
        ";
        $mail->send();



        $maill->isSMTP();                                            //Send using SMTP
        $maill->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $maill->SMTPAuth   = true;                                   //Enable SMTP authentication
        $maill->Username   = 'ronyk010201@gmail.com';                     //SMTP username
        $maill->Password   = 'jvib ggwl mina ywuj';                               //SMTP password
        $maill->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $maill->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $maill->setFrom('ronyk010201@gmail.com', 'Admin');
        $maill->addAddress($email, 'User');     //Add a recipient
    

        //Content
        $maill->isHTML(true);                                
        $maill->Subject = 'Thank You for Booking a Consultation for Your Pet!';
        $maill->Body    = "Dear $name,

        I hope this email finds you well.
        
        I wanted to take a moment to express my sincere gratitude for choosing our veterinary clinic for the consultation for your beloved pet, $pet. We are thrilled to have the opportunity to assist you and your furry friend with their healthcare needs.
        
        Your appointment has been successfully scheduled for $last_appoinment_date , $last_appoinment_time. Our team of experienced veterinarians is dedicated to providing the highest level of care and attention to every animal that comes through our doors, and we are committed to ensuring a positive and comfortable experience for both you and your pet during your visit.
        
        If you have any questions or need further assistance before your appointment, please don't hesitate to contact us. We are here to help in any way we can.
        
        Once again, thank you for choosing Luxury Pet Wash. We look forward to meeting you and $pet soon!
        
        Warm regards,
        ";
        $maill->send(); 
    }catch (Exception $e) {      
            echo "<script>alert('Enter Valid Email')</script>";
        }
      
    }
       echo "<script>alert('Purches recorded')</script>";

}

        




?>



</body>

</html>
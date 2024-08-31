<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="style/allstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="style/service.css">
    
</head>

<body>
    <div class="container">
        <div class="top-container">
            <div class="header">
                <a href="#">
                    <img class="logo-img" src="logo_images/logo.webp" alt="logo-img" />
                </a>

                <div class="social-media">
                    <a href="tel:8766816741" class="call">
                        <i class="fa-solid fa-phone"></i>
                        <span>+9123453421</span>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#"> <i class="fa-brands fa-whatsapp"></i> </a>
                    <a href="#"> <i class="fa-brands fa-linkedin"></i> </a>
                </div>
            </div>

            <nav class="navbar">
                    <a href="index.html" class="navDisplay">Home</a>
                    <a href="aboutus.html" class="navDisplay">About us</a>
                    <div class="dropdown navDisplay">
                        <button class="dropbtn">Service
                            <!-- <i class="fa fa-caret-down"></i> -->
                        </button>
                        <div class="dropdown-content">
                            <a href="consulant.html">Consulant</a>
                            <a href="service.php">Book a Service</a>
                            <!-- <a href="#">Link 3</a> -->
                        </div>
                    </div>
          
                    <a href="contact.php" class="navDisplay">Contact us</a>
                   
                    <div class="dropdown navDisplay">
                        <button class="dropbtn">Pet Shop
                            <!-- <i class="fa fa-caret-down"></i> -->
                        </button>
                        <div class="dropdown-content">
                            <a href="Other info/dog_shop/DOG_SHOP_PAGE.HTML">Dogs</a>
                            <a href="Other info/cat_shop/CAT_SHOP_PAGE.HTML">Cats</a>
                            <a href="Other info/bird_shop/BIRD_SHOP_PAGE.html">Birds</a>
                            <a href="buypets.php">Buy pets</a>
                            <!-- <a href="#">Link 3</a> -->
                        </div>
                    </div>
          
                    <a href="Other info/docter/doctor.html" class="navDisplay">Docters</a>
                    <a href="admin/dashboard.php" class="navDisplay">Admin</a>
          
                    <button class="hambureger-btn">
                        <img src="hamburger.png" alt="" class="hamburger-btn-img" onclick="show_hide()" />
                    </button>
                </nav>
          


        </div>

        <h1>Pet Details</h1>

        <div class="middle">
            <form action="" method="post">
                <div class="img">
                    <div class="img1">
                        <img src="Services/service/Doggy.webp" alt="">
                        <input type="radio" name="radioButton" value="Dog" required>
                    </div>
                    <div class="img2">
                        <img src="Services/service/catty.webp" alt="">
                        <input type="radio" name="radioButton" value="Dog" required>
                    </div>
                </div>
                <div class="col1">
                    <div class="service">
                        <h3>Select Service</h3>
                        <select name="service" required>
                            <option value="Grooming">Grooming</option>
                            <option value="Training">Training</option>
                            <option value="Relocation">Relocation</option>
                            <option value="Walking">Walking</option>
                        </select>
                    </div>
                    <div class="service">
                        <h3>Aggressive</h3>
                        <select name="aggressive" required>
                            <option value="Normal">Normal</option>
                            <option value="Middle">Middle</option>
                            <option value="High">High</option>
                        </select>
                    </div>

                </div>

                <div class="name cl-1">
                    <h3>Name</h3>
                    <input type="text" name="name" required>
                </div>

                <div class="col2">
                    <div class="email">
                        <h3>Email</h3>
                        <input type="email" name="email" required>
                    </div>
                    <div class="mobile">
                        <h3>Mobile No.</h3>
                        <input type="text" name="mobile" required>
                    </div>

                </div>

                <div class="address cl-1">
                    <h3>Address</h3>
                    <textarea name="address" id="" name="address" cols="30" rows="10" required></textarea>
                </div>

                <div class="address cl-1">
                <h3>Select Time</h3>
                <input type="time" id="appointment-time" name="appointment_time" cols="30" rows="10" required>

                </div>

                <input type="submit" name="send" class="submit" required>
               
            </form>
        </div>


        <div class="footer-parent">
            <div class="footer-above-img">
                <img src="Homepage_img/pets watching.jpeg" alt="">
            </div>
            <div class="footer-container">
                <div class="footer-divs footer-left">
                    <img src="logo_images/logo.webp" alt="" />

                    <span>Welcome to I Luxury Pet Wash, where we believe that every pet
                        deserves to look and feel their best.
                    </span>
                </div>
                <div class="footer-divs footer-middle">
                    <h2>Our Services</h2>

                    <div class="footer-middle-services">
                        <div>
                            <i class="fa-solid fa-arrow-right"></i>
                            <a href="service.php">pet Grooming</a>
                        </div>
                        <div>
                            <i class="fa-solid fa-arrow-right"></i>
                            <a href="service.php">pet Training</a>
                        </div>
                        <div>
                            <i class="fa-solid fa-arrow-right"></i>
                            <a href="service.php">pet Relocation</a>
                        </div>
                        <div>
                            <i class="fa-solid fa-arrow-right"></i>
                            <a href="service.php">pet Insurance</a>
                        </div>
                    </div>
                </div>
                <div class="footer-divs footer-right">
                    <h2>Contact Info</h2>
                    <div class="footer-right-div">
                        <div>
                            <i class="fa-regular fa-envelope"></i>
                            <p>123@gmail.com</p>
                        </div>
                        <div>
                            <i class="fa-solid fa-phone"></i>
                            <p>+912345678543</p>
                        </div>
                        <div class="footer-right-div-location">
                            <i class="fa-solid fa-location-pin"></i>
                            <p>Kolhapur</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <span>Copyright © 2023 I Luxury Pet Wash All rights Reserved Onkar Kumbhar</span>
            </div>
        </div>
    </div>


    
<?php

       
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $mobile=$_POST['mobile'];
    $email = $_POST['email'];        
    $service = $_POST['service'];
    $aggressive = $_POST['aggressive'];      
    $address = $_POST['address'];
    $pet = $_POST["radioButton"];
    $time = $_POST["appointment_time"];
   

   

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
        $mail->Subject = 'New Service Booked From Website';
        $mail->Body    = "Name = $name<br>
        Mobile = $mobile<br>
        Email = $email<br>
        Address = $address<br>
        Service = $service<br>
        Aggressive = $aggressive<br>
        Pet = $pet<br>
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
        $maill->Subject = 'Thank you for contacting us';
        $maill->Body    = "Dear $name,<br>
        We appreciate your interest in our Service.
        Thank you for reaching out to us .           
        We have received your message and we will get back to you as soon as possible.
        Our working hours are [Monday to Friday, 9 AM to 5 PM].
        Please allow us some time to review your message and provide you with the best possible solution.           
        In the meantime,You can also follow us on [social media platforms] to stay updated with our latest news and offers.            
        We value your time and we look forward to serving you.
        ";
        $maill->send(); 
         
       $server = "localhost";
       $username = "root";
       $password = "";
       
       $con = mysqli_connect($server,$username,$password);

       if(!$con){
         die("Connection failes".$mysqli_connect_error());
     }
         
       $sql1 = "SELECT sr_no FROM pet_wash.service WHERE sr_no = (SELECT MAX(sr_no) FROM pet_wash.service)";
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
     
       $sql_query = "INSERT INTO `pet_wash`.`service`(`sr_no`,`Name`,`Mobile_No`,`Email`,`Address`,`Pet`,`Aggressive`,`Service_name`,`Date`,`Time`)
       VALUES('$sr_no','$name','$mobile','$email','$address','$pet','$aggressive','$service',current_timestamp(),'$time');";
       $result = $con->query($sql_query);
    //    $result = $con->query($sql_query);
    //    $result->free();
       $con->close();    
       echo "<script>alert('Service Booked')</script>";
    } catch (Exception $e) {      
        echo "<script>alert('Enter Valid Email')</script>";
    }
}

else {
    echo "<script>alert('Enter Valid Email')</script>";
}

        
}



?>


  <script src="script.js"></script>
</body>

</html>
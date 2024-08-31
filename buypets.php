<!DOCTYPE html>
<html>

<head>
    <title>Buy Now - Pet Shop</title>
    <link rel="stylesheet" href="style/allstyle.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: auto;
            max-width: 600px;

        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        select,
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"],button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 44%;
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: #45a049;


        }

        .btns{
            display: flex;
    
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


      


    <h1>Buy Now</h1>
    <form action="index.html" method="POST">
        <label for="pet">Select Pet:</label>
        <select id="pet" name="pet" onchange="updateOptions(),updatePrice()">
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
        </select><br><br>
        <label for="breed">Select Breed:</label>
        <select id="breed" name="breed" onchange="updatePrice()"></select>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br><br>
        <label for="price">price:</label>
        <input type="text" id="price" name="price" readonly><br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>
        
        <div class="btns">
        <input type="submit" value="Buy Now" name="send">
        <button><a href="index.html">Go to Home</a></button>
        </div>
        
       
    </form>

    
<?php

      
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send'])){
    $pet = $_POST['pet'];
    $breed = $_POST['breed'];
    $name = $_POST['name'];
    $mobile=$_POST['phone'];
    $email = $_POST['email'];        
    $price = $_POST['price'];         
    $address = $_POST['address'];   


    
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
        $mail->Subject = 'New Pet Purchesed';
        $mail->Body    = "Name = $name<br>
        Mobile = $mobile<br>
        Email = $email<br>
        Address = $address<br>
        pet = $pet<br>
        breed = $breed<br>
       
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
        $maill->Subject = 'Thank You for Choosing Us for Your Pet Needs!';
        $maill->Body    = "

        Dear $name,
        
        We hope this email finds you well and enjoying the new addition to your family. We wanted to take a moment to thank you for choosing us for your pet needs.
        
        Here at [Your Pet Store Name], we strive to provide the best quality pets and supplies to our customers, and we are delighted that you chose to purchase your pet from us. Your satisfaction is our top priority, and we are committed to providing you with excellent service and support throughout your pet ownership journey.
        
        If you have any questions or need assistance with your new pet, please do not hesitate to contact us. We are here to help in any way we can.
        
        Once again, thank you for choosing Luxury Pet Wash. We look forward to serving you again in the future.
        
        Warm regards,
        
        
      
        ";
        $maill->send(); 


          
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($server,$username,$password);

    if(!$con){
      die("Connection failes".$mysqli_connect_error());
  }
  
  $sql1 = "SELECT id FROM pet_wash.petbuying WHERE id = (SELECT MAX(id) FROM pet_wash.petbuying)";
  // Execute the query and get the result object
  $result = $con->query($sql1);    
//    Check for query errors  
  $sr_no=1;
  if($result == TRUE){
      $row = $result->fetch_assoc();    
      // Store the value of the column in a variable
      $sr_no = $row["id"];    
      $sr_no = $sr_no + 1;
      
  }else{
      $sr_no = 1;
  }   
  
  // Free the result object and close the connection
  $result->free();
     
       $sql_query = "INSERT INTO `pet_wash`.`petbuying`(`id`,	`buyer_name`,	`email`,	`phone`,	`pet_type`,	`pet_breed`	,`Address`,	`Booking_date`,	`price`	)
       VALUES('$sr_no','$name','$email','$mobile','$pet','$breed','$address',current_timestamp(),'$price');";
       $result = $con->query($sql_query);
    //    $result = $con->query($sql_query);
    //    $result->free();
       $con->close();    
       echo "<script>alert('Purches recorded')</script>";
}

       catch (Exception $e) {      
        echo "<script>alert('Enter Valid Email')</script>";
    }
    
    }
}



        




?>


    <script>
        function updateOptions() {
            var petSelect = document.getElementById("pet");
            var breedSelect = document.getElementById("breed");
            var pet = petSelect.value;

            // Clear existing options
            breedSelect.innerHTML = "";

            // Add new options based on the selected pet
            if (pet === "dog") {
                addOption(breedSelect, "German Shepherd", "german_shepherd");
                addOption(breedSelect, "Bulldog", "bulldog");
                addOption(breedSelect, "Golden Retriever", "golden_retriever");
                addOption(breedSelect, "English Mastiff", "english_mastiff");
                addOption(breedSelect, "Pomeranian", "pomeranian");

            } else if (pet === "cat") {
                addOption(breedSelect, "Bombay Cat", "bombay_cat");
                addOption(breedSelect, "Himalayan Cat", "himalayan_cat");
                addOption(breedSelect, "Siamese", "siamese");
                addOption(breedSelect, "Rusty-Spotted Cat", "rusty-spotted_cat");
                addOption(breedSelect, "Ragdoll Cat", "ragdoll_cat");
            } else if (pet === "bird") {
                addOption(breedSelect, "Cockatiels", "cockatiels");
                addOption(breedSelect, "Doves", "doves");
                addOption(breedSelect, "Canaries", "canaries");
                addOption(breedSelect, "Hyacinth Macaws", "hyacinth_macaws");
                addOption(breedSelect, "Green-Cheeked Conures", "green-cheeked_conures");


            }
        }

        function addOption(select, text, value) {
            var option = document.createElement("option");
            option.text = text;
            option.value = value;
            select.add(option);
        }

        const pets = [

            { name: "german_shepherd", price: 18599 },
            { name: "bulldog", price: 12999 },
            { name: "golden_retriever", price: 16999 },
            { name: "english_mastiff", price: 17999 },
            { name: "pomeranian", price: 15999 },
            { name: "bombay_cat", price: 6599 },
            { name: "himalayan_cat", price: 8999 },
            { name: "siamese", price: 9999 },
            { name: "rusty-spotted_cat", price: 7999 },
            { name: "ragdoll_cat", price: 6999 },
            { name: "cockatiels", price: 1599 },
            { name: "doves", price: 4999 },
            { name: "canaries", price: 2999 },
            { name: "hyacinth_macaws", price: 2999 },
            { name: "green-cheeked_conures", price: 1999 }
        ]

        // const pets = [
        //     { name: "German Shepherd", price: 18599 },
        //     { name: "Bulldog", price: 12999 },
        //     // Add more pet objects
        // ];

        // const selectElement = document.getElementById("breed");
        // console.log(selectElement.value);

        function updatePrice() {
            const selectElement = document.getElementById("breed");
            const selectedPetName = selectElement.value;
            const pet = pets.find(pet => pet.name === selectedPetName);
            // console.log(pet.price); 
            // console.log(selectedPetName)
            if (pet) {
                document.getElementById("price").value = pet.price;
                // console.log(pet.price)
            } else {
                document.getElementById("price").value = "";
            }
        }

    </script>
</body>

</html>
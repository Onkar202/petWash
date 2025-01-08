# Pet Services Website

## Overview
This project is a simple website designed for veterinary and pet-related services such as grooming, cleaning, and shopping. Users can book appointments for their pets, and a notification email is sent to both the user and the shop owner using PHP Mailer.

### Technologies Used:
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP, MySQL
- **Database**: MySQL (using XAMPP server)
- **Email Notifications**: PHP Mailer

## Features
1. Book appointments for pet services.
2. Receive email notifications for booked services.
3. Shop owner is also notified of new bookings via email.

## Prerequisites
To run this project, ensure the following are installed:
1. **XAMPP server**
2. A compatible web browser
3. A valid email ID and app password for PHP Mailer setup

## Setting Up the Project

### Step 1: Download and Extract Project
1. Download the project zip file.
2. Extract the zip file.

### Step 2: XAMPP Setup
1. Install XAMPP server if not already installed.
2. Navigate to the XAMPP installation directory (default: `C://xampp/htdocs`).
3. Move the extracted project folder to the `htdocs` folder.

### Step 3: Database Setup
1. Start XAMPP and enable the **Apache** and **MySQL** services.
2. Open a browser and navigate to `http://localhost/phpmyadmin`.
3. Create a new database with the name `pet_wash`.
4. Import the database file located in the `db` folder of the project.

### Step 4: Configure PHP Mailer
1. Open the project folder in a code editor.
2. Locate the PHP Mailer configuration file (e.g., `mailer_config.php` or similar).
3. Update the email ID and app password in the code:
   ```php
   $mail->Username = 'your-email@example.com'; // Replace with your email ID
   $mail->Password = 'your-app-password';     // Replace with your app password
   ```

## Running the Project
1. Start the XAMPP server and ensure Apache and MySQL are running.
2. Open a browser and navigate to `http://localhost/{project-folder-name}`.
3. Explore the website and book a service to test functionality.

## Notes
- Use a secure app password for your email ID to configure PHP Mailer.
- Ensure the `pet_wash` database is properly imported for the website to function.
- For any issues, check the server logs in the XAMPP control panel.

Enjoy exploring the Pet Services Website!


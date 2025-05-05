# PHP Secure Login Gym System

A fully functional and secure PHP-based user authentication system created specifically for managing gym memberships and login sessions. This system includes user registration, secure login, password recovery, and a protected dashboard.

---

## Project Structure

php-secure-login-gym-system/
├── css/ # Stylesheets
├── dashboard/ # Protected content for logged-in users
├── include/ # Configuration and helper files
├── connect.php # Database connection script
├── forgot_password.php # Form to request password reset
├── forgot-password-recovery-mail.php # Sends recovery email
├── index.php # Login form
├── logout.php # Logout and session destroy
├── register.php # Registration form
├── secure_login.php # Login processing script
├── .gitattributes # Git config


---

## Features

- Secure login and registration with password hashing
- Password recovery via email
- Session control to protect dashboard access
- Clean modular file organization
- Basic CSS styling for user interface

---

## Requirements

- PHP 7.x or newer
- MySQL or compatible database
- Local server stack (XAMPP, WAMP, MAMP)

---

## Setup Instructions

1. **Start Apache and MySQL** (XAMPP/WAMP)
2. **Import the Database**  
   - Create a MySQL database (e.g., `gym_users`)
   - Import any provided SQL file if available
3. **Configure Database Connection**  
   - Edit `connect.php`:
     ```php
     $username = "root";
     $password = "";
     $database = "gym_users";
     ```
4. **Run the App**  
   - Visit `http://localhost/php-secure-login-gym-system/` in your browser

---

## Author

Created with care and effort by **Sheila Demonteverde**  
© 2025 Sheila Demonteverde. All rights reserved.
MAC 272 - PHP Web Development

---

## 📄 License

This project is provided for educational purposes. Redistribution or commercial use without permission is prohibited.


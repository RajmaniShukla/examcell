# ExamCell - Online Examination Portal

🎓 **An online examination management system for educational institutions**

[![PHP](https://img.shields.io/badge/PHP-5.x-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.x-orange.svg)](https://mysql.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

## 📖 About

**ExamCell** is an online examination portal developed for **Rajarshi Rananjay Sinh Institute of Management and Technology (RRSIMT), Amethi**. The system provides separate portals for:

- **Students** - Registration, login, view results
- **Teachers** - Registration, login, manage exams and results

## 🚀 Features

### Student Portal
- 📝 Student registration with personal details
- 🔐 Secure login system
- 📊 View examination results
- 👤 Profile management

### Teacher Portal
- 📝 Teacher registration
- 🔐 Teacher login
- 📋 Manage student results
- 👤 Profile management

### General Features
- 🏠 Homepage with image slider
- 📱 Navigation menu
- 🎨 Custom CSS styling

## 📁 Project Structure

```
examcell/
├── index.html              # Homepage with slider
├── index1.html             # Alternate homepage
├── dbconnect.php           # Database connection (⚠️ configure)
│
├── Student Portal
│   ├── student.html        # Student registration form
│   ├── student.php         # Process student registration
│   ├── student_login.html  # Student login page
│   ├── student_login.php   # Student login handler
│   └── student_display.php # Display student info
│
├── Teacher Portal
│   ├── teacher.html        # Teacher registration form
│   ├── teacher.php         # Process teacher registration
│   ├── teacher_reg.php     # Teacher registration handler
│   ├── teacher_login.html  # Teacher login page
│   ├── teacher_login.php   # Teacher login handler
│   └── teacher_display.php # Display teacher info
│
├── Common
│   ├── login.html          # General login page
│   ├── login.php           # Login handler
│   ├── registration.php    # General registration handler
│   ├── display.php         # Display records
│   ├── insert.php          # Insert records
│   └── function.php        # Utility functions
│
├── css/                    # Stylesheets
│   ├── style.css          # Main styles
│   ├── menu.css           # Navigation menu
│   ├── login.css          # Login page styles
│   ├── register.css       # Registration styles
│   └── rrsimt.css         # Institution-specific styles
│
└── image/                  # Image assets
    └── (slider images)
```

## ⚙️ Installation

### Prerequisites

- PHP 5.6+ (PHP 7+ recommended with mysqli)
- MySQL 5.6+
- Apache/Nginx web server

### Database Setup

1. **Create the database:**
   ```sql
   CREATE DATABASE my_project;
   USE my_project;
   ```

2. **Create required tables:**
   ```sql
   -- Students table
   CREATE TABLE students (
       id INT PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) UNIQUE,
       password VARCHAR(255),
       roll_no VARCHAR(20),
       course VARCHAR(50),
       semester INT,
       phone VARCHAR(15),
       address TEXT,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   -- Teachers table
   CREATE TABLE teachers (
       id INT PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) UNIQUE,
       password VARCHAR(255),
       employee_id VARCHAR(20),
       department VARCHAR(50),
       phone VARCHAR(15),
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   -- Results table
   CREATE TABLE results (
       id INT PRIMARY KEY AUTO_INCREMENT,
       student_id INT,
       subject VARCHAR(100),
       marks INT,
       grade VARCHAR(5),
       exam_date DATE,
       FOREIGN KEY (student_id) REFERENCES students(id)
   );
   ```

### Application Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/RajmaniShukla/examcell.git
   cd examcell
   ```

2. **Configure database connection:**
   
   Edit `dbconnect.php` with your credentials (see Security Notes below)

3. **Configure your web server** to serve the project directory

4. **Access the application:**
   ```
   http://localhost/examcell/
   ```

## 🔒 Security Notes

⚠️ **Critical: This project uses deprecated PHP functions!**

### Current Issues:
- Uses deprecated `mysql_*` functions (removed in PHP 7)
- Hardcoded database credentials
- No password hashing
- No input validation

### Required Updates for Production:

1. **Update `dbconnect.php` to use mysqli:**
   ```php
   <?php
   $host = 'localhost';
   $user = 'your_username';
   $pass = 'your_password';
   $db   = 'my_project';
   
   $conn = mysqli_connect($host, $user, $pass, $db);
   
   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
   ?>
   ```

2. **Hash passwords** using `password_hash()`:
   ```php
   $hashed = password_hash($password, PASSWORD_DEFAULT);
   ```

3. **Use prepared statements** for all queries

4. **Add input validation** for all form fields

## 🛠️ Technical Improvements Needed

- [ ] Upgrade from `mysql_*` to `mysqli_*` or PDO
- [ ] Implement password hashing
- [ ] Add CSRF protection
- [ ] Input validation and sanitization
- [ ] Responsive design for mobile
- [ ] Email verification for registration
- [ ] Password reset functionality
- [ ] Admin dashboard
- [ ] Exam scheduling system
- [ ] Online exam taking module

## 📋 File Notes

Some files have duplicate versions (with `(2)` suffix) - these appear to be backup copies and can be cleaned up if not needed.

## 👤 Author

**Rajmani Shukla**

- GitHub: [@RajmaniShukla](https://github.com/RajmaniShukla)

## 🏫 Institution

Developed for **RRSIMT** (Rajarshi Rananjay Sinh Institute of Management and Technology), Munshiganj, Amethi.

## 📜 License

This project is licensed under the MIT License.

---

🎓 *Empowering education through technology - ExamCell*

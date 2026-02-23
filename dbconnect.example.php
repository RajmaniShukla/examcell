<?php
/**
 * Database Connection Template
 * 
 * Copy this file to dbconnect.php and update credentials:
 *   cp dbconnect.example.php dbconnect.php
 * 
 * ⚠️ SECURITY: Never commit dbconnect.php with real credentials!
 * 
 * NOTE: The original code uses deprecated mysql_* functions.
 * Use the mysqli version below for PHP 7+ compatibility.
 */

// ===========================================
// MODERN mysqli CONNECTION (RECOMMENDED)
// ===========================================
$db_host = 'localhost';
$db_user = 'your_username';
$db_pass = 'your_password';
$db_name = 'my_project';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

// ===========================================
// LEGACY mysql_* (DEPRECATED - PHP < 7 only)
// ===========================================
/*
mysql_connect("localhost", "root", "");
mysql_select_db("my_project");
*/
?>

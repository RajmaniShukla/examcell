<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'registration');

class database
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  mysql_select_db(DB_NAME, $conn);
 }
 
 public function insert($teacher_id,$name,$dob,$department,$qualification,$gender,$mobile,$email, $password,$address)
 {
  $res = mysql_query("INSERT teacher_table(teacher_id,name,dob,department,qualification,gender,mobile,email,password,address) VALUES($teacher_id,$name,$dob,$department,$qualification,$gender,$mobile,$email, $password,$address)");
  return $res;
 }
 

}

?>
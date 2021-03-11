<?php
extract($_POST);
 if(isset($login))
 {
	 if(!empty($roll_no)&&!empty($password))
	 {
	 mysql_connect("localhost","root","");
     mysql_select_db("registration");
	 require_once"function.php";
     $sql_chk="select * from student_table where roll_no='$roll_no' and password='$password'" ;
	 $result=mysql_query($sql_chk);
	 $count=mysql_num_rows($result);
	  if($count==1)
	  {
	  //store data in session
	  session_start();
	  $row=mysql_fetch_assoc($result);
	  $_SESSION['roll_no']=$row['roll_no'];
	  $_SESSION['pwd']=$row['password'];
	  header('location:student_display.php');
	  }
	  else
	  
		  echo "invalid login details";
	 }
	 }
	?> 
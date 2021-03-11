<?php
extract($_POST);
 if(isset($login))
 {
	 if(!empty($teacher_id)&&!empty($password))
	 {
	 mysql_connect("localhost","root","");
     mysql_select_db("registration");
	 require_once"function.php";
     $sql_chk="select * from teacher_table where teacher_id='$teacher_id' and password='$password'" ;
	 $result=mysql_query($sql_chk);
	 $count=mysql_num_rows($result);
	  if($count==1)
	  {
	  //store data in session
	  session_start();
	  $row=mysql_fetch_assoc($result);
	  $_SESSION['teacher_id']=$row['teacher_id'];
	  $_SESSION['pwd']=$row['password'];
	  header('location:teacher_display.php');
	  }
	  else
	  
		  echo "invalid login details";
	 }
	 }
	?> 
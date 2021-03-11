<?php
 extract($_POST);
  if(isset($submit))
  {
	  mysql_connect("localhost","root","");
	  mysql_select_db("registration");
	  $sql_qry="insert into teacher_table(teacher_id,name,dob,department,qualification,gender,mobile,email,password,address) values('$teacher_id','$name','$dob','$department','$qualification','$gender','$mobile','$email','$password','$address')";
	  $result=mysql_query($sql_qry);
	  if($result)
	  {
		echo "success";  
	  }
	  else
	  {
		 echo "failed";  
	  }
  
  }
  ?>
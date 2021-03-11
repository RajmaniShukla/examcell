<?php
 extract($_POST);
  if(isset($submit))
  {
	  mysql_connect("localhost","root","");
	  mysql_select_db("registration");
	 $sql_qry= "insert into student_table(name,father_name,dob,gender,year,branch,mobile,email,roll_no,password,address) values('$name','$father_name','$dob','$gender','$year','$branch','$mobile','$email','$roll_no','($password)','$address')";
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
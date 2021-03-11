<link href="css/register.css"  rel="stylesheet"/>
<table id="table"width="700"height="500"align="center"border="1">
<?php
session_start();
 mysql_connect("localhost","root","");
 mysql_select_db("registration");
 $tid=$_SESSION['teacher_id'];
 $pwd=$_SESSION['pwd'];
 $sql_qry="select * from teacher_tbl where teacher_id='$teacher_id' and password='$pwd' ";
 $resultset=mysql_query($sql_qry);
 $count=mysql_num_rows($resultset);
 if($count>0)
 {
	  while($row=mysql_fetch_assoc($resultset))
	  {
		  ?>
	    <tr><th colspan="3"width="700" height="90" style="background-color:#a70000;color:white;font-size:200%">USER DETAILS</th></tr> 
	    <tr><th>NAME <strong>:</strong></th><td width="500"height="70"><?php echo ucfirst($row['name']);?></td><td width="250"height="70"rowspan="2"><?php echo ucfirst($row['image']);?></td></tr>
		<tr><th>MOBILE <strong>:</strong> </th><td width="500"height="70"><?php echo ($row['mobile']);?></td></tr>
		<tr><th>E-MAIL <strong>:</strong> </th><td width="500"height="70"><?php echo ($row['email']);?></td></tr>
		<tr><th>ADDRESS <strong>:</strong> </th><td width="500"height="70"><?php echo ($row['address']);?></td></tr>
		<tr><th>QUALIFICATION <strong>:</strong> </th><td width="500"height="70"><?php echo ($row['qualification']);?></td></tr>
		<tr><th>GENDER <strong>:</strong> </th><td width="500"height="70"><?php echo ($row['gender']);?></td></tr>
		<tr><th>DOB <strong>:</strong> </th><td width="500"height="70"><?php echo ($row['dob']);?></td></tr>
		 <tr><th height="70"style="background-color:#a70000;color:white;font-size:200%"><a href="update.php?user_id=<?php echo $row['user_id']?>">Update</a></th>
		 <th height="70"style="background-color:#a70000;color:white;font-size:200%"colspan="2"><a href="delete.php?user_id=<?php echo $row['user_id']?>">Delete</a></th>
		 
      <?php 
	  }  
  }
  else
  {
	  ?>
	 <tr><td colspan="6">no records found</td>
</tr>
  <?php
  }
  ?>  
  </table>
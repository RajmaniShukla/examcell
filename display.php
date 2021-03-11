<link href="css/register.css"  rel="stylesheet"/>
<table id="table"width="700"height="500"align="center"border="1">
<?php
session_start();
 mysql_connect("localhost","root","");
 mysql_select_db("registration");
 $rno=$_SESSION['roll_no'];
 $pwd=$_SESSION['pwd'];
 $sql_qry="select * from teacher_tbl where roll_no='$roll_no' and password='$pwd' ";
 $resultset=mysql_query($sql_qry);
 $count=mysql_num_rows($resultset);
 if($count>0)
 {
	  while($row=mysql_fetch_assoc($resultset))
	  {
		  ?>
	    <tr><th colspan="3"width="700" height="90" style="background-color:#a70000;color:white;font-size:200%">USER DETAILS</th></tr> 
	    <tr><th>NAME <strong>:</strong></th><td width="500"height="70"><?php echo ucfirst($row['name']);?></td><td width="250"height="70"rowspan="2"><?php echo ucfirst($row['image']);?></td></tr>
		<tr><th>E-MAIL <strong>:</strong> </th><td width="500"height="70"><?php echo ($row['email']);?></td></tr>
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
<?php
include_once 'function.php';
$con = new database();

// data insert code starts here.
if(isset($_POST['submit']))
{
$tid = $_POST['teacher_id'];
 $tname = $_POST['name'];
 $dob = $_POST['dob'];
 $department = $_POST['department'];
 $qualification = $_POST['qualification'];
 $gender = $_POST['gender'];
 $contact_no = $_POST['mobile'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $address = $_POST['address'];
 $con->insert($tid,$tname,$dob,$department,$qualification,$gender,$contact_no,$email, $password,$address);
 if($con)
 {
	 ?>
		 <html>
		 <head>
		 <script>
          alert("you registered successfull");
		 </script>
			 </head>
		 </html>
<?php		 
	  
 }
 else
 {
	 echo"failed";
 
}
}
// data insert code ends here.

?>
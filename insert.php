<?php
include_once("function.php");
$insertdata=new DB_con();
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$adrss=$_POST['address'];
$sql=$insertdata->insert($fname,$email,$contact,$gender,$education,$adrss);
if($sql)
{
echo "<script>alert('Data inserted');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
 ?>
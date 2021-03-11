<?php
class database
{
	var $con;
 var $db_host="localhost";
 var $db_user="root";
 var $db_pass="";
 var $db_name="registration";
 function connect()
{
	$this->con = new mysql($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
		if(	$this->con->connect_error)
		{
			echo "database connection failed";
		}
			else
			{
			 echo "database connection done";
			}
		}
}
$c = new database();


?>
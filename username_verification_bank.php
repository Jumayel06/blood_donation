<?php
	$user=$_REQUEST['user'];

	$connection = mysql_connect('localhost','root','') or die(mysql_error());
	$database = mysql_select_db("blood_donation",$connection);

	$data=mysql_query("SELECT * FROM blood_bank where bank_username='$user'");
	if(mysql_num_rows($data)>0)
	{
		print "<span style=\"color:red;\"><br />Username already taken!<br /></span>";
	}
	else
	{
		print "<span style=\"color:green;\"><br />Username available!<br /></span>";

	}
?>
<?php
	$id=$_REQUEST['user'];

	$connection = mysql_connect('localhost','root','') or die(mysql_error());
	$database = mysql_select_db("blood_donation",$connection);

	$data=mysql_query("SELECT * FROM blood_bank where bank_identification='$id'");
	if(mysql_num_rows($data)>0)
	{
		print "<span style=\"color:red;\"><br />Blood bank registered already!<br /></span>";
	}
	else
	{
		print "<span style=\"color:green;\"><br />Verified!<br /></span>";

	}
?>
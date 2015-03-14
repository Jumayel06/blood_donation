<?php
	$id_=$_POST["id"];	
	$connection = mysql_connect('localhost','root','') or die(mysql_error());
    $database = mysql_select_db("blood_donation",$connection);
	$result = mysql_query("SELECT * FROM donor WHERE donor_govt_id ='$id_'");
	
	$flag["code"]=0;

	if( mysql_num_rows($result) >0)
	{
		$flag["code"]=1;
	}
	
	print(json_encode($flag));
?>
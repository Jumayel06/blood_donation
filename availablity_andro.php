<?php
	$bgroup=$_POST['bgroup'];
	$city=$_POST['city'];
	
    $connection = mysql_connect('localhost','root','') or die(mysql_error());
    $database = mysql_select_db("blood_donation",$connection);

   
     $result = mysql_query("SELECT * FROM donor WHERE donor_blood_group = '$bgroup' AND donor_city='$city' AND donor_id IN (SELECT donor_id FROM blood_given_by_donor WHERE (bag1='available' OR bag2='available'))");
	

	$flag["code"]=1;

	if( mysql_num_rows($result) == 0)
	{
		$flag["code"]=0;
	}
	
	print(json_encode($flag));
?>
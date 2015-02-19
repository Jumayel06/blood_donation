<?php
$connection = mysql_connect('localhost','root','') or die(mysql_error());
$database = mysql_select_db("blood_donation",$connection);

$id=$_POST["id"];
$data=mysql_query("SELECT * FROM donor where donor_govt_id='$id'");

$flag['message']=0;

if(mysql_num_rows($data)>0)
{
	$result = mysql_query("SELECT * FROM donor WHERE donor_govt_id = '$id'");
	while($row = mysql_fetch_array($result))
	{
		$donor_id = $row['donor_id'];
	}   
	$data=mysql_query("SELECT * FROM blood_given_by_donor where donor_id='$donor_id' ORDER BY date_of_blood_given DESC LIMIT 1");

	if(mysql_num_rows($data)>0)
	{
				while($row = mysql_fetch_array($data))
				{
					$date = $row['date_of_blood_given'];
				}  

				$now = time(); // or your date as well
	    		$your_date = strtotime($date);
	     		$datediff = $now - $your_date;
	     		$diff= floor($datediff/(60*60*24)); 
				if($diff<90)
				{
				   $flag['message']=-1;
				}
				else
				{
				  $flag['message']=1;
				}
	}
}
else
{
   $flag['message']=0;
}

print(json_encode($flag));

?>
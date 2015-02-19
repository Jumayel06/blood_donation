<?php
session_start();
$id=$_REQUEST['user'];

$connection = mysql_connect('localhost','root','') or die(mysql_error());
$database = mysql_select_db("blood_donation",$connection);

$data=mysql_query("SELECT * FROM donor where donor_govt_id='$id'");
if(mysql_num_rows($data)>0)
{
print "<span style=\"color:green;\"><br />Registered Donor!<br /></span>";
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
			print "<span style=\"color:red;\"> Caution: Donor can't give blood!<br /> Donor last donated blood $diff days ago!</span>";
			$_SESSION['donation']=0;
			}
			else
			{
			print "<span style=\"color:green;\"> Donor is eligible for donating blood!</span>";
			$_SESSION['donation']=1;
			}
}
else
{
	print "<span style=\"color:green;\"> Donor is eligible for donating blood!</span>";
	$_SESSION['donation']=1;
}



}
else
{
print "<span style=\"color:red;\"> <br />Donor not registered!</span>";
$_SESSION['donation']=0;
}




?>
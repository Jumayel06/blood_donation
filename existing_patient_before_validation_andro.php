<?php

$id=$_POST["govt_id"];

$connection = mysql_connect('localhost','root','') or die(mysql_error());

$database = mysql_select_db("blood_donation",$connection);

$data=mysql_query("SELECT * FROM patient where patient_govt_id='$id'");

$flag["code"]=0;
$flag["go"]=0;
$flag["total_blood"]=0;
$flag["blood"]="";

if(mysql_num_rows($data)>0)
{
			
			$result = mysql_query("SELECT * FROM patient WHERE patient_govt_id = '$id'");

			while($row = mysql_fetch_array($result))
			{
				$patient_id = $row['patient_id'];
				$pat_blood=$row['patient_blood_group'];
			}
            $flag["blood"]=$pat_blood;
			$data2=mysql_query("SELECT count(*) AS val FROM blood_taken_by_patient where patient_id='$patient_id'");
			$row = mysql_fetch_array($data2);
			$val = $row[0];

			 if($val>0)
			 {
			 	$data=mysql_query("SELECT SUM(no_of_bags) FROM blood_taken_by_patient where patient_id='$patient_id'");

				while($row = mysql_fetch_array($data))
				{
					$total=$row['SUM(no_of_bags)'];				
				}  

				if($total>=5)
	 			{
	 			  $flag["go"]=0;
	 			  $flag["total_blood"]=$total;
	 			}
	 			else
	 			{
	 			 $flag["go"]=1;
	 			 $flag["total_blood"]=$total;
	 			}
			 }
			else
			{
			 	
			 	$flag["go"]=1;
			 	$flag["total_blood"]=0;
			}
$flag["code"]=1;
}
else
{
	$flag["code"]=0;
}

print(json_encode($flag));

mysql_close($connection);
?>
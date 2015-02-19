<?php
session_start();
$id=$_REQUEST['user'];

$connection = mysql_connect('localhost','root','') or die(mysql_error());
$database = mysql_select_db("blood_donation",$connection);

$data=mysql_query("SELECT * FROM patient where patient_govt_id='$id'");
if(mysql_num_rows($data)>0)
{
			print "<span style=\"color:green;\"><br />Registered Patient!<br /></span>";
			$result = mysql_query("SELECT * FROM patient WHERE patient_govt_id = '$id'");
			while($row = mysql_fetch_array($result))
			{
				$patient_id = $row['patient_id'];
			}   
			$_SESSION['patient_govt_id']=$id;
			$_SESSION['patient_id']=$patient_id;

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

			// 			$now = time(); // or your date as well
			//     			$your_date = strtotime($date);
			//      			$datediff = $now - $your_date;
			//      			$diff= floor($datediff/(60*60*24)); 
			// 			if($diff<90)
			// 			{
			// 			print "<span style=\"color:red;\"> Caution: Donor can't give blood!<br /> Donor last donated blood $diff days ago!</span>";
			// 			}
			// 			else
			// 			{
			// 			print "<span style=\"color:green;\"> Donor is eligible for donating blood!</span>";
			// 			}

						if($total>=5)
			 			{
			 			print "<span style=\"color:red;\"> Caution: Patient can't take any more blood!<br /> Patient took $total bags already!</span>";
			 			$_SESSION['step1']=0;
			 			}
			 			else
			 			{
			 			print "<span style=\"color:green;\"> Patient is eligible for taking blood!<br /> Patient took $total bags so far!</span>";
			 			$_SESSION['step1']=1;
			 			$_SESSION['total_blood']=$total;
			 			}
			}
			else
			{
			 	print "<span style=\"color:green;\"> Patient is eligible for taking blood!<br> patient hasn't taken blood yet!</span>";
			 	$_SESSION['step1']=1;
			 	$_SESSION['total_blood']=0;

			}
}
else
{
	print "<span style=\"color:red;\"> <br />Patient not registered!</span>";
	$_SESSION['step1']=0;
}




?>
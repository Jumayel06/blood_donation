<?php
session_start();
$bags=$_REQUEST['user'];
$connection = mysql_connect('localhost','root','') or die(mysql_error());
$database = mysql_select_db("blood_donation",$connection);
$id=$_SESSION['patient_id'];
$_SESSION['step3']=1;
$bank_id=$_SESSION['bank_id'];
$bgroup=$_SESSION['bgroup'];
$remaining=5-$_SESSION['total_blood'];
$data=mysql_query("SELECT COUNT(bag1) FROM blood_given_by_donor where bank_id='$bank_id' AND bag1='available' AND donor_id IN (select donor_id from donor where donor_blood_group='$bgroup') ");

				while($row = mysql_fetch_array($data))
				{
					$totalbag1=$row['COUNT(bag1)'];				
				}  
$data=mysql_query("SELECT COUNT(bag2) FROM blood_given_by_donor where bank_id='$bank_id' AND bag2='available' AND donor_id IN (select donor_id from donor where donor_blood_group='$bgroup') ");

				while($row = mysql_fetch_array($data))
				{
					$totalbag2=$row['COUNT(bag2)'];				
				} 

				$total=$totalbag1+$totalbag2;

			if($bags<=$remaining && $bags<=$total)
			{
								print "<span style=\"color:red;\"><br />$remaining<br />$total </span>";

				print "<span style=\"color:green;\"><br /> Patient can take $bags bag blood!</span>";
			}
			else
			{
				print "<span style=\"color:red;\"><br /> Patient cant take $bags bag blood!</span>";
				$_SESSION['step3']=0;

			}


?>
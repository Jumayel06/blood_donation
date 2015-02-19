<?php
session_start();
$bgroup=$_REQUEST['user'];
$connection = mysql_connect('localhost','root','') or die(mysql_error());
$database = mysql_select_db("blood_donation",$connection);
$id=$_SESSION['patient_id'];
$_SESSION['step2']=1;

$data=mysql_query("SELECT * FROM patient where patient_id='$id'");
			while($row = mysql_fetch_array($data))
			{
				$patient_blood_group = $row['patient_blood_group'];
			}   
			$_SESSION['bgroup']=$patient_blood_group;
			if($patient_blood_group!=$bgroup)
			{
					print "<span style=\"color:red;\"> <br />Patient blood group didn't match! <br />Patient's blood group is: $patient_blood_group </span>";
					$_SESSION['step2']=0;
			}

?>
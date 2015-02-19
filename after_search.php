<?php
	session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Blood Donation Service</title>
		<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
        <style>
			#search{
				position:absolute;
				left:10%;
				right:10%;
				font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
				font-size:14px;
				padding:10px;
			}
		</style>
</head>



<body>
<!------------------------------------------------------ start header ------------------------------------------------->
	<div id="wrapper">
		<div id="uppermenulay">
			<div id="uppermenu">
        		<a href="registrationpage.php" style="color:white;text-decoration: none;">Sign Up</a> <strong style="color:white;">|</strong>  <a href="loginpage.php" style="color:white;text-decoration: none;">Members?</a>
        	</div>
		</div>
	</div>
	<div id="wrapper2">
		<a href="index.php">
	        <div id="logoholder">
             <img src="images/1.gif" width="128" height="138" id="image" />              
        	</div>
        	<div id="headertext">
              	<br /><br /><br />
              	<strong style="font-size:37px; color:#292A2C; font-family:Verdana, Geneva, sans-serif">Blood <strong style="color:#CC0000">Donation</strong> 	</strong>
              	<br />
              	<strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif"> Donate</strong> 
              	<strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif">Blood</strong>, 
              	<strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif">Save</strong> 
              <strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif">Lives</strong>
			</div>
        	<div id="menu">
        		<ul id="minitabs">
                  <li><a href="index.php">Home</a></li>
                  <li><a  href="loginpage.php">Sign In</a></li>
                  <li><a href="registrationpage.php">Sign Up</a></li>
                  <li><a href="aboutblood.php">Blood Tips</a></li>
                  <li><a href="#">Contact Us</a></li>
				</ul>
        	</div>  
        </a>   
	</div>

<!--------------------------------------------------------- end header --------------------------------------------------------->
<div id="mid3" >
	<div id="temp">
		<div id="search">
<?php
	$bgroup=$_SESSION['bgroup'];
	$city=$_SESSION['city'];	
	$connection = mysql_connect('localhost','root','') or die(mysql_error());
    $database = mysql_select_db("blood_donation",$connection);
	$result = mysql_query("SELECT * FROM donor WHERE donor_blood_group = '$bgroup' AND donor_city='$city' AND donor_id IN (SELECT donor_id FROM blood_given_by_donor where bag1='available' OR bag2='available')");
	if( mysql_num_rows($result) == 0)
	{
		$status='Unavailable';
	}
	else
	{
		$status='Available';
	}
?>
<h3 style="text-align:center; color:#CC0000; font-size:20px">Status: <?php echo $status;?></h3>
<h3 style="text-align:center">Blood Group:<span style="color:green;"> <?php echo $bgroup; ?></span></h3>
<h3 style="text-align:center">City: <span style="color:green;"><?php echo $city; ?></span></h3>
			
<?php if($status=='Available'){ ?>
			<table width="1000" border="1" align="center">
            	<thead >
 					<tr >
    					<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:30px" width="100" align="center" colspan="6" >Donor List</td>
  					</tr>
  					<tr >
    					<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:18px" width="100" align="center">Donor Name</td>
    					<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px" width="100" align="center">Donor Contact  No</td>
                        <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px" width="100" align="center">Donor Address</td>
                        <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px" width="100" align="center">Blood Bank Name</td>
                        <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px" width="100" align="center">Blood Bank Address</td>
                        <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px" width="100" align="center">Blood Bank Contact No</td>

  					</tr>
				</thead>
<!-------------------------------------------------- PHP SCRIPT START --------------------------------------------------------->

<?php
		

		$bgroup=$_SESSION['bgroup'];
		$city=$_SESSION['city']; 
		$result = mysql_query("SELECT * FROM donor WHERE donor_blood_group = '$bgroup' AND donor_city='$city' AND donor_id IN (SELECT donor_id FROM blood_given_by_donor where bag1='available' OR bag2='available')");
					while($row = mysql_fetch_array($result))
					{
						$donor_id = $row['donor_id'];
						$donor_name = $row['donor_name'];
						$donor_contact_no = $row['donor_contact_no'];
						$donor_address = $row['donor_address'];




						$result2 = mysql_query("SELECT * FROM blood_bank WHERE bank_id IN (SELECT bank_id FROM blood_given_by_donor where donor_id='$donor_id' AND (bag1='available' OR bag2='available'))");
						while($row = mysql_fetch_array($result2))
						{
						$bank_name = $row['bank_name'];
						$bank_contact_no = $row['bank_contact_no'];
						$bank_address = $row['bank_address'];
						}
						$result3 = mysql_query("SELECT * FROM blood_given_by_donor WHERE donor_id='$donor_id' AND (bag1='available' OR bag2='available')");
						while($row = mysql_fetch_array($result3))
						{
						$bag1 = $row['bag1'];
						$bag2 = $row['bag2'];
						}



				
?>
						 <tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $donor_name; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $donor_contact_no; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $donor_address; ?></td>
  									<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $bank_name; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $bank_address; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $bank_contact_no; ?></td>

  						</tr>
						
					
<?php  } } else { ?><h3 style="text-align:center; color:#CC0000; font-size:15px"><?php echo "Sorry, this blood isn't available in any of the blood bank in this city."; }?></h3>








<!-------------------------------------------------- PHP SCRIPT END --------------------------------------------------------->
			</table> 
		</div>
	</div>
</div>
<!------------------------------------------------- start footer ----------------------------------------------------------->
<br /><br /><br />
<div id="footer">
	<p class="legal">
		@2014 Blood Donation Service. All Rights Reserved.
  </p>
</div>
<!------------------------------------------------- end footer -------------------------------------------------------------->
</body>
</html>

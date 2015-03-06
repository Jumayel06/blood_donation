<?php
	session_start();
  $connection = mysql_connect('localhost','root','') or die(mysql_error());
    $database = mysql_select_db("blood_donation",$connection);
      $result = mysql_query("SELECT * FROM blood_given_by_donor");
      $now = time(); // or your date as well
      $status1="expired";
      while($row = mysql_fetch_array($result))
      {
        $date = $row['date_of_blood_given'];
        $donor_id = $row['donor_id'];
        $bag1 = $row['bag1'];
        $bag2 = $row['bag2'];
        $your_date = strtotime($date);
            $datediff = $now - $your_date;
            $diff= floor($datediff/(60*60*24)); 
        if($diff>10)
        {
          if($bag1=="available")
          {
            mysql_query("UPDATE blood_given_by_donor set bag1='$status1' where donor_id='$donor_id' AND date_of_blood_given='$date'");
          }
          if($bag2=="available")
          {
            mysql_query("UPDATE blood_given_by_donor set bag2='$status1' where donor_id='$donor_id' AND date_of_blood_given='$date'");
          } 
        }
      }
      
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
			@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  font-family: "Roboto", helvetica, arial, sans-serif;
  text-rendering: optimizeLegibility;
}


.table-title h3 {
   
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: #FFC000;
  border-radius:3px;
  color: #FFC000;
  border-collapse: collapse;
  margin: auto;
  padding:15px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color: #FFC000 ;
  background:#FFC000;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color: #dd5 ;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}

 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#34495E;
}
 


tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#34495E;
  padding:3px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
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
              	<strong style="font-size:37px; color:#292A2C; font-family:Verdana, Geneva, sans-serif">Blood <strong style="color:#CC0000">Connect</strong> 	</strong>
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
                  <li><a href="contact.php">Contact Us</a></li>
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

  if($_SESSION['division']=='null')
  {
	     $result = mysql_query("SELECT * FROM donor WHERE donor_blood_group = '$bgroup' AND donor_city='$city' AND donor_id IN (SELECT donor_id FROM blood_given_by_donor where bag1='available' OR bag2='available')");
	}
  else
  {
       $division=$_SESSION['division']; 
       $result = mysql_query("SELECT * FROM donor WHERE donor_blood_group = '$bgroup' AND division='$division' AND donor_id IN (SELECT donor_id FROM blood_given_by_donor where bag1='available' OR bag2='available')");
  }

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
<h3 style="text-align:center"><?php if($_SESSION['division']=='null') echo "City: "; else echo "Division: " ?><span style="color:green;"><?php 
                                                                        if($_SESSION['division']=='null')
                                                                          echo $city;
                                                                        else
                                                                          echo $division;


                                                                           ?></span></h3>
			
<?php if($status=='Available'){ ?>
			<table width="1000" border="1" align="center"  class="table-fill">
            	<thead >
 					<tr >
    					<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:30px;color:#FFC000" width="100" align="center" colspan="7" >Donor List</td>
  					</tr>
  					<tr >
    					<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:18px;color:#FFFFFF" width="100" align="center">Donor Name</td>
    					<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px;color:#FFFFFF" width="100" align="center">Donor Contact  No</td>
                        <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px;color:#FFFFFF" width="100" align="center">Donor Address</td>
                        <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px;color:#FFFFFF" width="100" align="center">Donor City</td>
                        <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px;color:#FFFFFF" width="100" align="center">Blood Bank Name</td>
                        <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px;color:#FFFFFF" width="100" align="center">Blood Bank Address</td>
                        <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:18px;color:#FFFFFF" width="100" align="center">Blood Bank Contact No</td>

  					</tr>
				</thead>
<!-------------------------------------------------- PHP SCRIPT START --------------------------------------------------------->

<?php
		

		$bgroup=$_SESSION['bgroup'];
		$city=$_SESSION['city']; 

  if($_SESSION['division']=='null')
  {
       $result = mysql_query("SELECT * FROM donor WHERE donor_blood_group = '$bgroup' AND donor_city='$city' AND donor_id IN (SELECT donor_id FROM blood_given_by_donor where bag1='available' OR bag2='available')");
  }
  else
  {
       $division=$_SESSION['division']; 
       $result = mysql_query("SELECT * FROM donor WHERE donor_blood_group = '$bgroup' AND division='$division' AND donor_id IN (SELECT donor_id FROM blood_given_by_donor where bag1='available' OR bag2='available')");
  }
					while($row = mysql_fetch_array($result))
					{
						$donor_id = $row['donor_id'];
						$donor_name = $row['donor_name'];
						$donor_contact_no = $row['donor_contact_no'];
						$donor_address = $row['donor_address'];
            $donor_city = $row['donor_city'];






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
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:14px; "width="100" align="center"><?php echo $donor_name; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:14px; "width="100" align="center"><?php echo $donor_contact_no; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:14px; "width="100" align="center"><?php echo $donor_address; ?></td>
  									                <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:14px; "width="100" align="center"><?php echo $donor_city; ?></td>

                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:14px; "width="100" align="center"><?php echo $bank_name; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:14px; "width="100" align="center"><?php echo $bank_address; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:14px; "width="100" align="center"><?php echo $bank_contact_no; ?></td>

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

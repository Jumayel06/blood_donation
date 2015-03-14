<?php
	session_start();


	if(!isset($_SESSION['username']))
	{
		echo '<script> window.location="loginpage.php"; </script>';
	} 


	foreach($_SESSION as $key => $val)
	{

    if ($key !== 'username')
    {

      unset($_SESSION[$key]);

    }

	}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Blood Donation Service</title>
		<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   		<script src="script.js"></script>
		<style>
			#bankpage{
				position:absolute;
				left:10%;
				right:10%;
				padding:10px;	
			}
		 	.a:hover {
    			background-color:#B00200;
			}
			a:link{
				text-decoration:none;	
			}
			.b:hover {
				background-color:#EBEBEB;
				
			}
			b:link{
				text-decoration:none;	
				
			}
			
			.btn{
				width:100px;
				height:30px;
				margin-left:245px;
				margin-top:10px;
				font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
			}
			
			.button1{
				width:100px;
				height:30px;
				border:none;
				outline:none;
				box-shadow:0 3px 2px 0 #2c80a2;
				color:#fff;
				font-size:15px;
				text-shadow:0 1px rgba(0,0,0,0.4);
				background-color:#3fb8e8;
				font-weight:700;
				background-image:url(../images/1.png);
				background-repeat:no-repeat;
				background-position:200px;
				font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
			}
			.button1:hover{
				background-color:#1baae3;
				cursor:pointer
			}
			.button1:active{
				padding-top:2px;
				box-shadow:none
			}
			#maindiv{
				position:relative;
				margin-left:28%;	
			}
			#cssmenu {
			  position: relative;
			  margin: 0;
			  font-family: 'Roboto Condensed';
			  line-height: 1;
			  width: 250px;
			  float:left;
			}
			.align-right {
			  float: right;
			}
			#cssmenu ul {
			  margin: 0;
			  padding: 0;
			  list-style: none;
			  display: block;
			}
			#cssmenu ul li {
			  position: relative;
			  margin: 0;
			  padding: 0;
			}
			#cssmenu ul li a {
			  text-decoration: none;
			  cursor: pointer;
			}
			#cssmenu > ul > li > a {
			  color: #dddddd;
			  text-transform: uppercase;
			  display: block;
			  padding: 20px;
			  border-top: 1px solid #000000;
			  border-left: 1px solid #000000;
			  border-right: 1px solid #000000;
			  background: #222222;
			  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
			  letter-spacing: 1px;
			  font-size: 16px;
			  font-weight: 300;
			  -webkit-transition: all 0.25s ease-in;
			  -moz-transition: all 0.25s ease-in;
			  -ms-transition: all 0.25s ease-in;
			  -o-transition: all 0.25s ease-in;
			  transition: all 0.25s ease-in;
			  position: relative;
			}
			#cssmenu > ul > li:first-child > a {
			  border-top-left-radius: 3px;
			  border-top-right-radius: 3px;
			}
			#cssmenu > ul > li:last-child > a {
			  border-bottom-left-radius: 3px;
			  border-bottom-right-radius: 3px;
			  border-bottom: 1px solid #000000;
			}
			#cssmenu > ul > li:hover > a,
			#cssmenu > ul > li.open > a,
			#cssmenu > ul > li.active > a {
			  background: #151515;
			  color: #ffffff;
			}
			#cssmenu ul > li.has-sub > a::after {
			  content: "";
			  position: absolute;
			  display: block;
			  width: 0;
			  height: 0;
			  border-top: 13px solid #000000;
			  border-botom: 13px solid transparent;
			  border-left: 125px solid transparent;
			  border-right: 125px solid transparent;
			  left: 0;
			  bottom: -13px;
			  bottom: 0px;
			  z-index: 1;
			  opacity: 0;
			  -webkit-transition: all .2s ease;
			  -moz-transition: all .2s ease;
			  -ms-transition: all .2s ease;
			  -o-transition: all .2s ease;
			  transition: all .2s ease;
			}
			#cssmenu ul > li.has-sub > a::before {
			  content: "";
			  position: absolute;
			  display: block;
			  width: 0;
			  height: 0;
			  border-top: 13px solid #151515;
			  border-botom: 13px solid transparent;
			  border-left: 125px solid transparent;
			  border-right: 125px solid transparent;
			  left: 0;
			  bottom: -12px;
			  bottom: -1px;
			  z-index: 3;
			  opacity: 0;
			  -webkit-transition: all .2s ease;
			  -moz-transition: all .2s ease;
			  -ms-transition: all .2s ease;
			  -o-transition: all .2s ease;
			  transition: all .2s ease;
			}
			#cssmenu ul > li.has-sub::after {
			  content: "";
			  display: block;
			  position: absolute;
			  width: 0;
			  height: 0;
			  border: 7px solid transparent;
			  border-top-color: #dddddd;
			  z-index: 2;
			  right: 20px;
			  top: 24.5px;
			  pointer-events: none;

			}
			#cssmenu ul > li:hover::after,
			#cssmenu ul > li.active::after,
			#cssmenu ul > li.open::after {
			  border-top-color: #ffffff;
			}
			#cssmenu ul > li.has-sub.open > a::after {
			  opacity: 1;
			  bottom: -13px;
			}
			#cssmenu ul > li.has-sub.open > a::before {
			  opacity: 1;
			  bottom: -12px;
			}
			#cssmenu ul ul {
			  display: none;
			}
			#cssmenu ul ul li {
			  border-left: 1px solid #ccc;
			  border-right: 1px solid #ccc;
			}
			#cssmenu ul ul li a {
			  background: #f1f1f1;
			  display: block;
			  position: relative;
			  font-size: 15px;
			  padding: 14px 20px;
			  border-bottom: 1px solid #dddddd;
			  color: #777777;
			  font-weight: 300;
			  -webkit-transition: all 0.25s ease-in;
			  -moz-transition: all 0.25s ease-in;
			  -ms-transition: all 0.25s ease-in;
			  -o-transition: all 0.25s ease-in;
			  transition: all 0.25s ease-in;
			}
			#cssmenu ul ul li:first-child > a {
			  padding-top: 18px;
			}
			#cssmenu ul ul ul li {
			  border: 0;
			}
			#cssmenu ul ul li:hover > a,
			#cssmenu ul ul li.open > a,
			#cssmenu ul ul li.active > a {
			  background: #e4e4e4;
			  color: #666666;
			}
			#cssmenu ul ul > li.has-sub > a::after {
			  border-top: 13px solid #dddddd;
			}
			#cssmenu ul ul > li.has-sub > a::before {
			  border-top: 13px solid #e4e4e4;
			}
			#cssmenu ul ul ul li a {
			  padding-left: 30px;
			}
			#cssmenu ul ul > li.has-sub::after {
			  top: 18.5px;
			  border-width: 6px;
			  border-top-color: #777777;
			}
			#cssmenu ul ul > li:hover::after,
			#cssmenu ul ul > li.active::after,
			#cssmenu ul ul > li.open::after {
			  border-top-color: #666666;
			}

@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  font-family: "Roboto", helvetica, arial, sans-serif;
  text-rendering: optimizeLegibility;
}


.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: #34495E;
  border-radius:3px;
  border-collapse: collapse;
  height: 150px;
  margin: auto;
  max-width: 600px;
  padding:15px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#34495E;
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
  color:#FFFFFF;
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

<!---------------------------------------------------- start header -------------------------------------------------->
<div id="wrapper">
	
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
              	<strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif">Blood,</strong> 
              	<strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif">Save</strong> 
                <strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif">Lives</strong>
			</div>
        	<div id="menu">
        		<ul id="minitabs">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="loginpage.php">Sign In</a></li>
                  <li><a href="registrationpage.php">Sign Up</a></li>
                  <li><a href="aboutblood.php">Blood Tips</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
				</ul>
        	</div>
        </a>
</div>
<!-- --------------------------------------------------end header ----------------------------------------------------->


<!----------------------------------------------------- start page ----------------------------------------------------->
<div id="mid5">
	<div id="temp">  
    	<div id="bankpage">
            <div id='cssmenu'>
                <ul>      
                	<li><a href='#'><span>Home</span></a>
                    <li class='active has-sub'><a href='#'><span>Registration</span></a>
                        <ul>
                            <li><a href='donor_registration.php'><span>Donor Registration</span></a></li>
                            <li><a href='patient_registration.php'><span>Patient Registration</span></a></li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='#'><span>Donation</span></a>
                        <ul>
                            <li><a href='existing_donor.php'><span>Existing Donor</span></a></li>
                            <li><a href='existing_patient_before.php'><span>Existing Patient</span></a></li>
                        </ul>
                    </li>
                    <li class='active has-sub'><a href='#'><span>Inquiry</span></a>
                        <ul>
                            <li><a href='donor_list.php'><span>List of Available Donors</span></a></li>
                            <li><a href='registered_donor_list.php'><span>List of Registered Donors</span></a></li>
                            <li><a href='registered_patient_list.php'><span>List of Registered Patients</span></a></li>

                        </ul>
                    </li>
                    <li><a href='logout.php'><span>Logout</span></a>
                </ul>
            </div>
            <div id="maindiv">
            	
            	<h1 style="color:#CC0000; ">Welcome  
                <span style="color:black;font-size:25px;">
                <?php		
					$connection = mysql_connect('localhost','root','') or die(mysql_error());
					$database = mysql_select_db("blood_donation",$connection);
					$username= $_SESSION['username'] ;
					$result = mysql_query("SELECT * FROM blood_bank WHERE bank_username = '$username'");
					while($row = mysql_fetch_array($result))
					{
						$bank_name = $row['bank_name'];
						$bank_id = $row['bank_id'];
  					} 
  					$_SESSION['bank_id']=$bank_id ;
					echo $bank_name;
                ?>
                </span>
                </h1>


                <?php
                $data=mysql_query("SELECT count(bag1) AS val FROM blood_given_by_donor where bag1='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='A+')");
                $row = mysql_fetch_array($data);
				$val = $row[0];
				$data=mysql_query("SELECT count(bag2) AS val2 FROM blood_given_by_donor where bag2='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='A+')");
                $row = mysql_fetch_array($data);
				$val2 = $row[0];
				$totalApos=$val+$val2;



				$data=mysql_query("SELECT count(bag1) AS val FROM blood_given_by_donor where bag1='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='B+')");
                $row = mysql_fetch_array($data);
				$val = $row[0];
				$data=mysql_query("SELECT count(bag2) AS val2 FROM blood_given_by_donor where bag2='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='B+')");
                $row = mysql_fetch_array($data);
				$val2 = $row[0];
				$totalBpos=$val+$val2;

				$data=mysql_query("SELECT count(bag1) AS val FROM blood_given_by_donor where bag1='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='A-')");
                $row = mysql_fetch_array($data);
				$val = $row[0];
				$data=mysql_query("SELECT count(bag2) AS val2 FROM blood_given_by_donor where bag2='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='A-')");
                $row = mysql_fetch_array($data);
				$val2 = $row[0];
				$totalAneg=$val+$val2;


				$data=mysql_query("SELECT count(bag1) AS val FROM blood_given_by_donor where bag1='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='B-')");
                $row = mysql_fetch_array($data);
				$val = $row[0];
				$data=mysql_query("SELECT count(bag2) AS val2 FROM blood_given_by_donor where bag2='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='B-')");
                $row = mysql_fetch_array($data);
				$val2 = $row[0];
				$totalBneg=$val+$val2;

				$data=mysql_query("SELECT count(bag1) AS val FROM blood_given_by_donor where bag1='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='O+')");
                $row = mysql_fetch_array($data);
				$val = $row[0];
				$data=mysql_query("SELECT count(bag2) AS val2 FROM blood_given_by_donor where bag2='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='O+')");
                $row = mysql_fetch_array($data);
				$val2 = $row[0];
				$totalOpos=$val+$val2;

				$data=mysql_query("SELECT count(bag1) AS val FROM blood_given_by_donor where bag1='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='O-')");
                $row = mysql_fetch_array($data);
				$val = $row[0];
				$data=mysql_query("SELECT count(bag2) AS val2 FROM blood_given_by_donor where bag2='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='O-')");
                $row = mysql_fetch_array($data);
				$val2 = $row[0];
				$totalOneg=$val+$val2;
				
				$data=mysql_query("SELECT count(bag1) AS val FROM blood_given_by_donor where bag1='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='AB+')");
                $row = mysql_fetch_array($data);
				$val = $row[0];
				$data=mysql_query("SELECT count(bag2) AS val2 FROM blood_given_by_donor where bag2='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='AB+')");
                $row = mysql_fetch_array($data);
				$val2 = $row[0];
				$totalABpos=$val+$val2;

				$data=mysql_query("SELECT count(bag1) AS val FROM blood_given_by_donor where bag1='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='AB-')");
                $row = mysql_fetch_array($data);
				$val = $row[0];
				$data=mysql_query("SELECT count(bag2) AS val2 FROM blood_given_by_donor where bag2='Available' AND bank_id='$bank_id'
                AND donor_id IN(select donor_id from donor where donor_blood_group='AB-')");
                $row = mysql_fetch_array($data);
				$val2 = $row[0];
				$totalABneg=$val+$val2;
                ?>

                <table width="700" border="1" class="table-fill" style="margin-left:10px; ">
            				<thead >
 							<tr >
    							<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:30px" width="100" align="center" colspan="4" >Summary</td>
  							</tr>
  							<tr >
	    						<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:20px; color:#dd5 ">Blood Group</td>
	    						<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center;font-size:20px; color:#dd5  ">Bags Available</td>
		    					
		                   
  							</tr>
							</thead>
						 <tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center">A+</td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $totalApos; ?></td>
  						</tr>
  						<tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center">B+</td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $totalBpos; ?></td>
  						</tr>
  						<tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center">A-</td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $totalAneg; ?></td>
  						</tr>
  						<tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center">B-</td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $totalBneg; ?></td>
  						</tr>
  						<tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center">O+</td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $totalOpos; ?></td>
  						</tr>
  						<tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center">O-</td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $totalOneg; ?></td>
  						</tr>
  						<tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center">AB+</td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $totalABpos; ?></td>
  						</tr>
  						<tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center">AB-</td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $totalABneg; ?></td>
  						</tr>
						
					
		
			</table>

            </div>
        </div>
	</div>
</div>


<!----------------------------------------------------- end page ------------------------------------------------------->


<!---------------------------------------------------- start footer ----------------------------------------------------->
<br /><br /><br />
<div id="footer">
	<p class="legal">
		@2014 Blood Donation Service. All Rights Reserved.
    </p>
</div>
<!------------------------------------------------------ end footer ------------------------------------------------------>
</body>
</html>

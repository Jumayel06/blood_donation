<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		echo '<script> window.location="loginpage.php"; </script>';
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

			#blood_group{
				margin-left: 10px;
				width: 180px;
				height: 100px;
				float: left;	
				margin-right: 35px;
				text-align: center;


			}	
			
		
			#bankpage{
				position:absolute;
				left:10%;
				right:10%;
				padding:10px;	

				font-family: 'trebuchet MS', 'Lucida sans', Arial;
    			font-size: 14px;
    			color: #444;
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


table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 100%;    
}

.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;         
}

.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;    
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}



/*----------------------*/

.zebra td, .zebra th {
    padding: 10px;
    border-bottom: 1px solid #f2f2f2;    
}

.zebra tbody tr:nth-child(even) {
    background: #f5f5f5;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
}

.zebra th {
    text-align: left;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
    border-bottom: 1px solid #ccc;
    background-color: #eee;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
    background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
    background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
    background-image:      -o-linear-gradient(top, #f5f5f5, #eee); 
    background-image:         linear-gradient(top, #f5f5f5, #eee);
}

.zebra th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;  
}

.zebra th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.zebra th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.zebra tfoot td {
    border-bottom: 0;
    border-top: 1px solid #fff;
    background-color: #f1f1f1;  
}

.zebra tfoot td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.zebra tfoot td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}

.zebra tfoot td:only-child{
    -moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px
    border-radius: 0 0 6px 6px
}

		</style>
</head>



<body>

<!---------------------------------------------------- start header -------------------------------------------------->
<div id="wrapper">
	<div id="uppermenulay">
	</div>
</div>

<div id="wrapper2" >
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
                	<li><a href='bank_page.php'><span>Home</span></a>
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
                            <li><a href='#'><span>List of Registered Patients</span></a></li>
                        </ul>
                    </li>
                    <li><a href='logout.php'><span>Logout</span></a>
                </ul>
            </div>
            <div id="maindiv">
 			
 			

			<?php			
						$connection = mysql_connect('localhost','root','') or die(mysql_error());
						$database = mysql_select_db("blood_donation",$connection);
						$username= $_SESSION['username'] ;
						$result = mysql_query("SELECT * FROM blood_bank WHERE bank_username = '$username'");
						while($row = mysql_fetch_array($result))
						{
							$bank_id = $row['bank_id'];
	  					}    			
	        				$result = mysql_query("SELECT * FROM patient WHERE bank_id='$bank_id'");
	        		
	        ?>
	        		

						<table border="1" width="720px" style="margin-left:5px; class="bordered" ">
            				<thead >
 							<tr >
    							<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:30px" width="100" align="center" colspan="7" >Registered Patients</td>
  							</tr>
  							<tr >
	    						<td style="text-align:center;font-weight:bold; color:black;font-size:18px; ">Patient Name</td>
	    						<td style="text-align:center;font-weight:bold; color:black;font-size:18px; ">National Identification No.</td>
	    						<td style="text-align:center;font-weight:bold; color:black;font-size:18px; ">Blood Group</td>
	    						<td style="text-align:center;font-weight:bold; color:black;font-size:18px; ">Disease</td>
		    					<td style="text-align:center;font-weight:bold; color:black;font-size:18px; ">Contact  No</td>
		                        <td style="text-align:center;font-weight:bold; color:black;font-size:18px; ">Address</td>
		                        <td style="text-align:center;font-weight:bold; color:black;font-size:18px; ">City</td>
		                        
		                   
  							</tr>
							</thead>

			<?php
	
					while($row = mysql_fetch_array($result))
					{
						$patient_id = $row['patient_id'];
						$patient_govt_id = $row['patient_govt_id'];
						$patient_name = $row['patient_name'];
						$patient_blood_group = $row['patient_blood_group'];
						$patient_contact_no = $row['patient_contact_no'];
						$patient_address = $row['patient_address'];
						$patient_city = $row['patient_city'];
						$patient_disease = $row['patient_disease'];
			?>
						 <tr>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $patient_name; ?></td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $patient_govt_id; ?></td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $patient_blood_group; ?></td>
    								<td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $patient_disease; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $patient_contact_no; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $patient_address; ?></td>
                                    <td style="font-family:Tahoma, Geneva, sans-serif; text-align:center; "width="100" align="center"><?php echo $patient_city; ?></td>						

  						</tr>
						
					
			<?php   }?>
			</table>

            </div>
			
<br /> <br /><br /><br />


	        <div id="footer">
	        
				<p class="legal">
					@2014 Blood Donation Service. All Rights Reserved.
	    		</p>
			</div>
        </div>

	</div>
	
</div>


<!----------------------------------------------------- end page ------------------------------------------------------->


<!---------------------------------------------------- start footer ----------------------------------------------------->


<!------------------------------------------------------ end footer ------------------------------------------------------>
</body>
</html>
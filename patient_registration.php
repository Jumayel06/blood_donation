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
			

			input, textarea { 
				font: 14px/24px Helvetica, Arial, sans-serif; 
				color: #666; 
			}
			input { 
				width: 60% 
			}
			
			input, textarea { 
				background: none repeat scroll 0 0 #FFFFFF; 
				border: 1px solid #C9C9C9; 
				box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset, -5px -5px 0 0 #F5F5F6, 5px 5px 0 0 #F5F5F6, 5px 0 0 0 #F5F5F6, 0 5px 0 0 #F5F5F6, 5px -5px 0 0 #F5F5F6, -5px 5px 0 0 #F5F5F6; 
				color: #545658; 
				padding: 8px; 
				font-size: 14px; 
				border-radius: 2px 2px 2px 2px; 
			}
			#submit { 
				background: url("../images/submit_bg.gif") repeat-x scroll 0 0 transparent; 
				border: 1px solid #B7D6DF; 
				border-radius: 2px 2px 2px 2px; 
				box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1); 
				color: #437182; 
				cursor: pointer; 
				font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; 
				font-size: 14px;
				font-weight: bold; 
				height: auto; 
				padding: 6px 10px; 
				text-shadow: 0 1px 0 #FFFFFF; 
				width: auto; 
			}
			#submit:hover { 
				background: url("../images/submit_hover_bg.gif") repeat-x scroll 0 0 transparent; 
				border: 1px solid #9FBAC0; 
				cursor: pointer; 
			}
			a { 
				color: #88BBC8; 
				text-decoration: none; 
			}
			a:hover { 
				color: #f26525 
			}
			#signup-form { 
				width: 510px; 
				margin: 0 auto; 
				background: #fff; 
				padding: 40px; 
				border: 10px solid #f2f2f2; 
			}

			h1, h2, h3, h4, h5, h6 { 
				margin: 0; 
				padding: 0; 
				color: #444; 
			}
			h1 { 
				float: left; 
				font-size: 24px; 
			}
			h2.secondary { 
				float: left; 
				width: 260px; 
				font-size: 16px; 
				font-weight: normal; 
				color: #999; 
				margin-bottom: 30px; 
				line-height: 26px; 
			}
			h3 { 
				margin: 5px 0 0 0 
			}

			.none { 
				display: none; 
			} /* End Clearfix _NO__DOTCOMMA__AFTER__*/
			
			#header { 
				border-bottom: 1px solid #efefef; 
			}
			#send p { 
				margin-bottom: 20px;
			}
			textarea { 
				width: 95%; 
				margin: 0 0 0 2px; 
			}
			#required p{
				font-size:10px;
			}
			#apply { 
				border-top: 1px solid #efefef; 
				margin-top: 30px; 
				padding: 20px 0 0 0; 
			}
			#apply ul { 
				margin-bottom: 50px 
			}
			form label { 
				display: block; 
				margin-bottom: 5px; 
				font-weight: bold; 
				font-size: 15px; 
			}
		</style>
</head>



<body>
<!---------------------------------------------------- start header -------------------------------------------------->
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
                  <li><a href="#">Contact Us</a></li>
				</ul>
        	</div>
        </a>
</div>
<!-- --------------------------------------------------end header ----------------------------------------------------->


<!----------------------------------------------------- start page ----------------------------------------------------->
<div id="mid6">
	<div id="temp">  
    	<div id="bankpage">
            <div id='cssmenu'>
                <ul>      
                	<li><a href='bank_page.php'><span>Home</span></a>
                    <li class='active has-sub'><a href='#'><span>Registration</span></a>
                        <ul>
                            <li><a href='donor_registration.php'><span>Donor Registration</span></a></li>
                            <li><a href='#'><span>Patient Registration</span></a></li>
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
                            <li><a href='donor_list.php'><span>List of Donors</span></a></li>
                            <li><a href='#'><span>List of Patients</span></a></li>
                        </ul>
                    </li>
                    <li><a href='logout.php'><span>Logout</span></a>
                </ul>
            </div>
            <div id="maindiv">
<!------------------------------------------------------BEGIN #signup-form ---------------------------------------------->
    			<div id="signup-form">
       			    <!--BEGIN #subscribe-inner -->
        			<div id="signup-inner">
        				<div class="clearfix" id="header">        
                			<h1>Patient Registration</h1>
					    </div><br />
 						<form id="send" action="patient_registration.php" name="registration" method="post" >
                            <p>
            
                            <label for="name">Name</label>
                            <input id="name" type="text" name="patient_name" value="" />
                            </p>
                            
	          <p>
            
                            <label for="id">Govt. Identification No.</label>
                            <input id="id" type="text" name="id" value="" />
                            </p>

                            <p>
                            <label for="bgroup">Blood Group: <select style="background-color:#FF;color:#666;width: 210px;padding: 4px;font-size: 15px;border: 1px solid black;border-radius: 0;height: 30px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin-left:15px" name="patient_blood_group">
                                  <option selected="selected" disabled="disabled">--Select blood Group--</option>
                                  <option>A+</option>
                                  <option>B+</option>
                                  <option>A-</option>
                                  <option>B-</option>
                                  <option>O+</option>
                                  <option>O-</option>
                                  <option>AB+</option>
                                  <option>AB-</option>
   							</select> </label>
                            
                            </p>

                           <p>
            
                            <label for="disease">Disease: </label>
                            <input id="disease" type="text"  value="" name="disease" />
                            </p>
  
                            <p>
                            
                            <p>
            
                            <label for="contact">Contact No: </label>
                            <input id="contact" type="text"  value="" name="patient_contact_no" />
                            </p>
  
                            <p>
            
                            <label for="address">Address: </label>
                            <input id="address" type="text" value="" name="patient_address" />
                            </p>
                            
                            <p>
                            <label for="city">City: <select style="background-color:#FF;color:#666;width: 210px;padding: 4px;font-size: 15px;border: 1px solid black;;border-radius: 0;height: 30px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin-left:18px" name="patient_city">
                                  <option selected="selected" disabled="disabled">--Select your city--</option>
                                  <option disabled="disabled" style="color:#B00200; font-size:30px;">Dhaka Division</option> 
                                  <option>Dhaka</option>
                                  <option>Bhairab</option>
                                  <option>Faridpur</option>
                                  <option>Jamalpur</option>
                                  <option>Kishoreganj</option>
                                  <option>Manikganj</option>
                                  <option>Madaripur</option>
                                  <option>Munshiganj</option>
                                  <option>Mymensingh</option>
                                  <option>Narsingdi</option>
                                  <option>Netrokona</option>
                                  <option>Rajbari</option>
                                  <option>Shariatpur</option>
                                  <option>Sherpur</option>
                                  <option>Tangail</option>
                                  <option>Tongi</option>
                                  <option>Gopalganj</option>
                                  <option disabled="disabled" style="color:#B00200; font-size:30px;">Barisal Division</option> 
                                  <option>Barguna</option>
                                  <option>Bakerganj</option>
                                  <option>Bhola</option>
                                  <option>Jhalokati</option>
                                  <option>Patuakhali</option>
                                  <option>Pirojpur</option>
                                  <option>Akhaura</option>
                                  <option>Cox's Bazar</option>
                                  <option>Bandarban</option>
                                  <option>Brahmanbaria</option>
                                  <option>Sarail</option>
                                  <option>Shahbazpur Town</option>
                                  <option>Chandpur</option>
                                  <option>Chaumuhani</option>
                                  <option>Feni</option>
                                  <option>Khagrachhari</option>
                                  <option>Laksam</option>
                                  <option>Lakshmipur</option>
                                  <option>Noakhali</option>
                                  <option>Rangamati</option>
                                  <option>Rangunia</option>
                                  <option>Sandwip</option>
                                  <option>Comilla</option>
                                  <option>Burichong</option>
                                  <option disabled="disabled" style="color:#B00200; font-size:30px;">Khulna Division</option>
                                  <option>Bagherhat</option>
                                  <option>Chuadanga</option>
                                  <option>Jessore</option>
                                  <option>Jhenaidah</option>
                                  <option>Kushtia</option>
                                  <option>Magura</option>
                                  <option>Meherpur</option>
                                  <option>Narail</option>
                                  <option>Shatkhira</option>
                                  <option disabled="disabled" style="color:#B00200; font-size:30px;">Rajshahi Division</option>
                                  <option>Bogra</option>
                                  <option>Joypurhat</option>
                                  <option>Naogaon</option>
                                  <option>Natore</option>
                                  <option>Nawabganj</option>
                                  <option>Pabna</option>
                                  <option>Sirajganj</option>
                                  <option>Shahjadpur</option>
                                  <option>Ullapara</option>
                                  <option>Iswardi</option>
                                  <option>Santhia</option>
                                  <option>Sherpur</option>
                                  <option disabled="disabled" style="color:#B00200; font-size:30px;">Rangpur Division</option>
                                  <option>Saidpur</option>
                                  <option>Dinajpur</option>
                                  <option>Gaibandha</option>
                                  <option>Gobindaganj</option>
                                  <option>Kurigram</option>
                                  <option>Lalmonirhat</option>
                                  <option>Nilphamari</option>
                                  <option>Panchagarh</option>
                                  <option>Thakurgaon</option>
                                  <option disabled="disabled" style="color:#B00200; font-size:30px;">Rangpur Division</option>
                                  <option>Golapganj</option>
                                  <option>Habiganj</option>
                                  <option>Maulvibazar</option>
                                  <option>Sreemangal</option>
                                  <option>Sunamganj</option>
                                  <option>Beanibazar</option>
                                  <option>Barlekha</option>             
                        	</select></label>
            					
                            </p>
                            
                            <p>
            
                            <button id="submit" type="submit" name="submit">Submit</button>
                            </p>
                            
                        </form>
            		</div>
        		    <!--END #signup-inner -->
        		</div>   
<!---------------------------------------------------------END #signup-form ----------------------------------------------->   
   			 </div>
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


<!-- ................................................PHP SCRIPT START.................................................. -->

<?php
if(isset($_POST['submit']))
{
        $connection = mysql_connect('localhost','root','') or die(mysql_error());
        $database = mysql_select_db("blood_donation",$connection);
        
        $patient_name = $_POST["patient_name"];
        $id = $_POST["id"];
        $patient_blood_group = $_POST["patient_blood_group"];
        $disease = $_POST["disease"];
        $patient_contact_no = $_POST["patient_contact_no"];
        $patient_address = $_POST["patient_address"];
        $patient_city = $_POST["patient_city"];
        $username= $_SESSION['username'] ;
		$result = mysql_query("SELECT * FROM blood_bank WHERE bank_username = '$username'");
				while($row = mysql_fetch_array($result))
				{
						$bank_id = $row['bank_id'];
		  		} 
        
        $query="insert into patient(bank_id,patient_name,patient_govt_id,patient_blood_group,patient_disease,patient_contact_no,patient_address,patient_city) values ('$bank_id','$patient_name','$id','$patient_blood_group','$disease','$patient_contact_no','$patient_address','$patient_city')";
      
    	if(mysql_query($query))
		{
			echo'<script> window.location="bank_page.php"; </script> ';
		}
}

?>

<!-- ................................................PHP SCRIPT END.................................................. -->






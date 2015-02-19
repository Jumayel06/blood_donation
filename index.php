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
			#viewdetails{
				border: 1px solid black;
				width:120px;
				padding:5px;
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
                  <li><a  id="current" href="#">Home</a></li>
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
<div id="midpage">
	<div id="temp">
		<div id="reg">
			<p style="color:white; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  margin-left:150px; padding-top:0px;color:white; font-size:50px; margin-bottom:0px;">Save a Life.Volunteer.</p>
<p style="color:white; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  margin-left:150px;color:white; margin-top:0px;font-size:20px;">Become the reason for a saved life.</p>
			<br />
			<a href="registrationpage.php">
                <div id="firstsignup" class="a" style="margin-left:150px;">
                    <p style="color:white;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  margin-top:0px; font-size:25px;padding:12px; border-color:white; border-width:2px; border-style:solid; width:164px;">SIGN UP NOW</p>  
                </div>    
			</a> 
		</div>    
		<div id="find">
<p style="color:white; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  margin-left:20px;color:white; margin-top:0px; font-size:35px; margin-bottom:0px">Find a Blood Donor</p>
<hr width="380px"> 
		<form action="index.php" method="post">
			<p style="color:white; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  margin-left:40px;color:white; margin-top:0px; font-size:15px; margin-bottom:0px; padding-top:20px">Blood Group:  
   				<select style="background-color:#FF;color:#666;width: 210px;padding: 5px;font-size: 15px;border: 0;border-radius: 0;height: 30px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin-left:15px" name="bgroup">
                      <option selected="selected" disabled="disabled">--Select blood Group--</option>
                      <option>A+</option>
                      <option>B+</option>
                      <option>A-</option>
                      <option>B-</option>
                      <option>O+</option>
                      <option>O-</option>
                      <option>AB+</option>
                      <option>AB-</option>
   				</select>
			</p>
   			<p style="color:white; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  margin-left:100px;color:white; margin-top:0px; font-size:15px; margin-bottom:0px; padding-top:20px">City:  
   				<select style="background-color:#FF;color:#666;width: 210px;padding: 5px;font-size: 15px;border: 0;border-radius: 0;height: 30px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin-left:18px" name="city">
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
   			</select>
   			<br />
			<div class="btn">
				<input class="button1" type="submit" value="Search" name="submit">
			</div>
            <br />
		</div>
			</p>
			<br />
		</div> 
		</form>	
		</div>  
	</div>
</div>

<div id=bottom>
	<div id="onethree">
		<h3 style="color:#333333; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:20px">All About Blood			</h3>
        <p>Blood is a bodily fluid in animals that delivers necessary substances...  <br /><br /> 
        <a href="aboutblood.php" style="text-decoration:none; color:black; "><div id="viewdetails" class="b">View Details >></div></a>
        </p>
     </div>
        <div id="twothree">
        <h3 style="color:#333333; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:20px">Types of Donation</h3>
        
        <p>You may not know it, but you can donate more than just blood. What you think of as...   <br /><br />
        <a href="typedonation.html" style="text-decoration:none; color:black; "><div id="viewdetails" class="b">View Details >></div></a>
        </p>
      </div>
        <div id="threethree">
        <h3 style="color:#333333; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:20px">FAQ</h3>
        
        <p>Frequently Asked Questions about giving blood, who can give?...   <br /><br />
        <a href="faq.html" style="text-decoration:none; color:black; "><div id="viewdetails" class="b">View Details >></div></a>
        </p>
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
if(isset($_POST['submit']) && isset($_POST['bgroup']) && isset($_POST['city']))
{		
        $connection = mysql_connect('localhost','root','') or die(mysql_error());
        $database = mysql_select_db("blood_donation",$connection);
        $bgroup = $_POST["bgroup"];
        $city = $_POST["city"];
		$_SESSION['bgroup']=$bgroup;
		$_SESSION['city']=$city;
echo '<script> window.location="after_search.php"; </script>';}
?>


<!-- ................................................PHP SCRIPT END.................................................. -->


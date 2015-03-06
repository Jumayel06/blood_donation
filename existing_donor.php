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
        		
		

		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
 		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 


		<script type="text/javascript">
     		  	$(function() {
              			 $("#datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
       		 	});
  		 </script>

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



					.btn{
				width:100px;
				height:30px;
				
				
				font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
			}
			
			.submit{
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
			.submit:hover{
				background-color:#1baae3;
				cursor:pointer
			}
			.submit:active{
				
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
                    
                    <li><a href='logout.php'><span>Logout</span></a>
                </ul>
            </div>
            <div id="maindiv">
            	<div id="design" style="margin-left:100px;width:340px;border:1px solid black; padding-left:100px;">
            	<form id="send" action="existing_donor.php" method="post" >
                            <p>
                            <label for="id"><h3>Govt. Identification Number:</h3></label>
                            <input id="id" type="text" name="id" value=""  style="background-color:#FF;color:#666;width: 210px;padding: 4px;font-size: 15px;border: 1px solid black;border-radius: 0;height: 15px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin-left:0px" /><span id="status"></span>
                            </p>
                            
                            <h5 class="error" id="error3" style="color:red;"></h5>
							<script type="text/javascript">
								document.getElementById("id").onblur = function() {
								var xmlhttp;
								var user=document.getElementById("id");
								if (user.value != "")
								{
								if (window.XMLHttpRequest)
								{
								xmlhttp=new XMLHttpRequest();
								}
								else
								{
								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
								}
								xmlhttp.onreadystatechange=function()
								{
								if (xmlhttp.readyState==4 && xmlhttp.status==200)
								{
								document.getElementById("status").innerHTML=xmlhttp.responseText;
								}
								};
								xmlhttp.open("GET","check.php?user="+encodeURIComponent(user.value),true);
								xmlhttp.send();
								}
								};
                            </script>

                            <p>
                            <label for="bags"><h3>No. of bags:</h3></label>
                             <select style="background-color:#FF;color:#666;width: 220px;padding: 4px;font-size: 15px;border: 1px solid black;border-radius: 0;height: 30px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin-left:0px" name="bags">
                                 
                                  <option>1</option>
                                  <option>2</option>
     
   	        </select>
                            </p>
                            
                            
                            
                            
                            
                             <p>
                            <label for="date"><h3>Date:</h3></label>
                            <input type="text" id="datepicker" name="datepicker" size="30" style="background-color:#FF;color:#666;width: 210px;padding: 4px;font-size: 15px;border: 1px solid black;border-radius: 0;height: 15px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin-left:0px"/> 
                            </p>              
                            <p>
                            <button id="submit" class="submit" type="submit" name="submit" style="margin-left:60px;">Submit</button>
                            </p>

                 </form>
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
        
        $id = $_POST["id"];
        $bags = $_POST["bags"];
        $date = $_POST["datepicker"];
    	$username=$_SESSION['username'];
		$result = mysql_query("SELECT * FROM blood_bank WHERE bank_username = '$username'");
					while($row = mysql_fetch_array($result))
					{
						$bank_id = $row['bank_id'];
  					}   
		$result = mysql_query("SELECT * FROM donor WHERE donor_govt_id = '$id'");
					while($row = mysql_fetch_array($result))
					{
						$donor_id = $row['donor_id'];
  					}   
        
        if($bags==1){
	$bag1="available";
	$bag2="none";}
        else{
	$bag1="available";
	$bag2="available";
         }			

		if($_SESSION['donation']==1)
		{
	        $query="insert into blood_given_by_donor (donor_id,bank_id,no_of_bags,date_of_blood_given,bag1,bag2) values ('$donor_id','$bank_id','$bags','$date','$bag1','$bag2')";
	      
	    	if(mysql_query($query))
			{
				echo'<script> window.location="bank_page.php"; </script> ';
			}
		}
		else
		{
			echo '<script>';
			echo 'alert("Donation cannot be processed!");';
			echo 'location.href="existing_donor.php"';
			echo '</script>';
		}
}

?>

<!-- ................................................PHP SCRIPT END.................................................. -->
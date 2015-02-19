<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Blood Donation Service</title>
		<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
		<style>
		*{
			margin:0;
			padding:0;
		}
		#msg{
			width:370px;
			position:absolute;
			padding:20px;
			margin-top:25px;
			left:770px;
			border:2px solid black;
			background-color:#F9F9F9;
		}
		#newdiv2{
			position:absolute;
			margin-top:10px;
			left:10%;
			background-image:url(images/login.jpg);
		}
		h1{
			font-size:56px;
		}
		h2{
			font-size:20px;
			padding:0px 0px 40px 0px;
			color:#aaa;
		}
		h2 span{
			color:#ffa800;
		}
		a{
			color:#777;
		}
		a:hover{
			color:#222;
		}
		p{
			padding:5px 0px;
		}
		
		.box{
			width:49%;
		}
		.left{
			float:left;
		}
		.right{
			float:right;
		}
		.clear{
			clear:both;
		}
		a.back{
			color:#777;
			position:fixed;
			top:5px;
			right:10px;
			text-decoration:none;
		}
		/* Form Style */
		.form_wrapper{
			background:#fff;
			border:1px solid #ddd;
			margin:0 auto;
			width:350px;
			font-size:16px;
			-moz-box-shadow:1px 1px 7px #ccc;
			-webkit-box-shadow:1px 1px 7px #ccc;
			box-shadow:1px 1px 7px #ccc;
		
		}
		.form_wrapper h3{
			padding:20px 30px 20px 30px;
			background-color:black;
			color:#fff;
			font-size:25px;
			border-bottom:1px solid #ddd;
		}
		.form_wrapper form{
			display:none;
			background:#fff;
		}
		.form_wrapper .column{
			width:47%;
			float:left;
		}
		form.active{
			display:block;
		}
		form.login{
			width:350px;
		}
		form.register{
			width:550px;
		}
		form.forgot_password{
			width:300px;
		}
		.form_wrapper a{
			text-decoration:none;
			color:#777;
			font-size:12px;
		}
		.form_wrapper a:hover{
			color:#000;
		}
		.form_wrapper label{
			display:block;
			padding:10px 30px 0px 30px;
			margin:10px 0px 0px 0px;
		}
		.form_wrapper input[type="text"],
		.form_wrapper input[type="password"]{
			border: solid 1px black;
			background: #FFFFFF;
			margin: 5px 30px 0px 30px;
			padding: 9px;
			display:block;
			font-size:16px;
			width:76%;
			background: 
				-webkit-gradient(
					linear,
					left top,
					left 25,
					from(#FFFFFF),
					color-stop(4%, #EEEEEE),
					to(#FFFFFF)
				);
			background: 
				-moz-linear-gradient(
					top,
					#FFFFFF,
					#EEEEEE 1px,
					#FFFFFF 25px
					);
			-moz-box-shadow: 0px 0px 8px #f0f0f0;
			-webkit-box-shadow: 0px 0px 8px #f0f0f0;
			box-shadow: 0px 0px 8px #f0f0f0;
		}
		.form_wrapper input[type="text"]:focus,
		.form_wrapper input[type="password"]:focus{
			background:#feffef;
		}
		.form_wrapper .bottom{
			background-color:black;
			border-top:1px solid #ddd;
			margin-top:20px;
			clear:both;
			color:#fff;
			text-shadow:1px 1px 1px #000;
		}
		.form_wrapper .bottom a{
			display:block;
			clear:both;
			padding:10px 30px;
			text-align:right;
			color:#ffa800;
			text-shadow:1px 1px 1px #000;
		}
		.form_wrapper a.forgot{
			float:right;
			font-style:italic;
			line-height:24px;
			color:#ffa800;
			text-shadow:1px 1px 1px #fff;
		}
		.form_wrapper a.forgot:hover{
			color:#000;
		}
		.form_wrapper div.remember{
			float:left;
			width:140px;
			margin:20px 0px 20px 30px;
			font-size:11px;
		}
		.form_wrapper div.remember input{
			float:left;
			margin:2px 5px 0px 0px;
		}
		.form_wrapper span.error{
			visibility:hidden;
			color:red;
			font-size:11px;
			font-style:italic;
			display:block;
			margin:4px 30px;
		}
		.form_wrapper input[type="submit"] {
			background: #e3e3e3;
			border: 1px solid #ccc;
			color: #333;
			font-family: "Trebuchet MS", "Myriad Pro", sans-serif;
			font-size: 14px;
			font-weight: bold;
			padding: 8px 0 9px;
			text-align: center;
			width: 150px;
			cursor:pointer;
			float:right;
			margin:15px 20px 10px 10px;
			text-shadow: 0px 1px 0px #fff;
			-moz-border-radius: 4px;
			-webkit-border-radius: 4px;
			border-radius: 4px;
			-moz-box-shadow: 0px 0px 2px #fff inset;
			-webkit-box-shadow: 0px 0px 2px #fff inset;
			box-shadow: 0px 0px 2px #fff inset;
		}
		.form_wrapper input[type="submit"]:hover {
			background: #d9d9d9;
			-moz-box-shadow: 0px 0px 2px #eaeaea inset;
			-webkit-box-shadow: 0px 0px 2px #eaeaea inset;
			box-shadow: 0px 0px 2px #eaeaea inset;
			color: #222;
		}
		
		#button1{
			border:1px solid black;
			width:100px;
			height:33px;
		}
		</style>        		
</head>
    <body>
    <!--------------------------------------------- start header -------------------------------------------->
        <div id="wrapper">
            <div id="uppermenulay">
                <div id="uppermenu">
                    <a href="#" style="color:white;text-decoration: none;">Sign Up</a> <strong style="color:white;">|</strong>  <a href="loginpage.php" style="color:white;text-decoration: none;">Members?</a>
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
                  <li><a id="current" href="#">Sign Up</a></li>
                  <li><a href="aboutblood.php">Blood Tips</a></li>
                  <li><a href="#">Contact Us</a></li>
				</ul>
        	</div>
        </a>  
        </div>
    <!------------------------------------------ end header---------------------------------------------->
    
        <div id="mid2" >
            <div id="temp">
                <div class="wrapper" id="newdiv2">
                    <div class="content"  >
                        <div id="form_wrapper" class="form_wrapper" >
                            <form class="register active" action="registrationpage.php" name="registration" method="post">
                                <h3>Register</h3>
                                <div class="column">
                                    <div>
                                        <label>Blood Bank Name:</label>
                                        <input type="text"  name="bank_name"/>
                                        <span class="error">This is an error</span>
        
                                    </div>
                                    <div>
                                        <label>Identification No:</label>
                                        <input type="text" name="bank_identification" placeholder="Govt. approved only"  />
                                        <span class="error">This is an error</span>
                                    </div>
                                    <div>
                                        <label>Address:</label>
                                        <input type="text" name="bank_address" />
                                        <span class="error">This is an error</span>
        
                                    </div>
                                    
                                    <div>
                                        <label>Contact No:</label>
                                        <input type="text" name="bank_contact_no"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                    
                                </div>
                                <div class="column">
                                    <div>
                                        <label>Username:</label>
                                        <input type="text" name="bank_username"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                    <div>
                                        <label>Email:</label>
                                        <input type="text" name="bank_email" />
                                        <span class="error">This is an error</span>
                                    </div>
                                    <div>
                                        <label>Password:</label>
                                        <input type="password" name="bank_password" />
                                        <span class="error">This is an error</span>
                                    </div>
                                    <div>
                                        <label>Confirm Password:</label>
                                        <input type="password" />
                                        <span class="error">This is an error</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    
                                    <input type="submit" name="submit" id="submit" value="Register" />
                                    <a href="loginpage.html" rel="login" class="linkform">You have an account already? Log in here</a>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="msg">
                 <p style="color:black; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  padding-top:0px; font-size:25px; 	margin-bottom:0px;">  Save a Life. Volunteer.</p>
                 <br /><br />
                 <p style="color:black; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  padding-top:0px; font-size:23px; margin-bottom:0px;"> A life awaits...</p>
                 <br /><br />
                 <p style="color:black; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  padding-top:0px; font-size:23px; margin-bottom:0px;"> Be the one to save it.</p>
                 <br /><br />
                 <strong> <p style="color:#CC0000; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  padding-top:0px; font-size:25px; margin-bottom:0px;"> Register today!  </p></strong>
                </div>
            </div>
        </div>
    
    <!-------------------------------------------------- Start Footer ------------------------------------------------------->
        <br /><br /><br />
        <div id="footer">
            <p class="legal">
                @2014 Blood Donation Service. All Rights Reserved.
            </p>
        </div>
    <!---------------------------------------------------- end footer ------------------------------------------------------->
    </body>
</html>

<!-- ................................................PHP SCRIPT START.................................................. -->

<?php
if(isset($_POST['submit']))
{
        $connection = mysql_connect('localhost','root','') or die(mysql_error());
        $database = mysql_select_db("blood_donation",$connection);
        
        $bank_name = $_POST["bank_name"];
        $bank_identification = $_POST["bank_identification"];
        $bank_address = $_POST["bank_address"];
        $bank_contact_no = $_POST["bank_contact_no"];
        $bank_username = $_POST["bank_username"];
        $bank_email = $_POST["bank_email"];
        $bank_password = $_POST["bank_password"];
        
       
        $query="insert into blood_bank(bank_name,bank_identification,bank_address,bank_contact_no,bank_username,bank_email,bank_password) values ('$bank_name','$bank_identification','$bank_address','$bank_contact_no','$bank_username','$bank_email','$bank_password')";
      
    	if(mysql_query($query))
		{
			echo'<script> window.location="index.php"; </script> ';
		}
}

?>

<!-- ................................................PHP SCRIPT END.................................................. -->






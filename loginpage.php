<!-- ................................................PHP SCRIPT START.................................................. -->
<?php
	session_start();
	if( (isset($_COOKIE['username'])) && (isset($_COOKIE['password'])) ) 
	{
		$_SESSION['username'] = $_COOKIE['username'];	
		header('Location: bank_page.php');
	}
	if(isset($_SESSION['username']))
	{
		echo '<script> window.location="bank_page.php"; </script>';
	} 
?>



<!-- ................................................PHP SCRIPT END.................................................. -->


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
				#newdiv{
					position:absolute;
					margin-top:30px;
					left:15%;
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
				
				.e:hover {
					background-color:#F89F14;
				}
				a:link{
					
					text-decoration:none;	
				}
			</style>	
</head>



<body>
<!--------------------------------------------- start header -------------------------------------------->
        <div id="wrapper">
            <div id="uppermenulay">
                <div id="uppermenu">
                    <a href="registrationpage.php" style="color:white;text-decoration: none;">Sign Up</a> <strong style="color:white;">|</strong>  <a href="#" style="color:white;text-decoration: none;">Members?</a>
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
                  <li><a id="current" href="#">Sign In</a></li>
                  <li><a href="registrationpage.php">Sign Up</a></li>
                  <li><a href="aboutblood.php">Blood Tips</a></li>
                  <li><a href="#">Contact Us</a></li>
				</ul>
        	</div>
        </a>      
        </div>
    <!------------------------------------------ end header---------------------------------------------->

<div id="mid" >
	<div id="temp">
 		<div class="wrapper" id="newdiv">
			<div class="content"  >
				<div id="form_wrapper" class="form_wrapper" >
					<form class="login active" action="loginpage.php" method="post">
						<h3>Login</h3>
						<div>
							<label>Username:</label>
							<input type="text" name="username" />
						</div>
						<div>
							<label>Password: 
                            		<span style="color:red;">
                            		<!-- ................................................PHP SCRIPT START.................................................. -->
<?php
	if(isset($_POST['submit']))
	{
		$connection = mysql_connect('localhost','root','') or die(mysql_error());
		$database = mysql_select_db("blood_donation",$connection);

		$username = $_POST["username"];
		$password = $_POST["password"];
		$sql = "SELECT count(*) FROM blood_bank WHERE bank_username = '$username' AND bank_password ='$password' LIMIT 1";
		$result = mysql_query($sql) or die(mysql_error());
		if (mysql_result($result, 0) > 0)
		{
			$_SESSION['username']=$username;
			if(isset($_POST['remember']))
			{
				setcookie("username",$username,time()+60*60*72);	//set expire duration
				setcookie("password",$password,time()+60*60*72);	//set expire duration
			}
			





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
			




    			
			echo '<script> window.location="bank_page.php"; </script>';
		}
		if (mysql_result($result, 0) < 1)
		{
			$_SESSION['error1'] = "Invalid Username Or Password!";
    		$_SESSION['c1']=1;
		}
	}
?>

<!-- ...........s.....................................PHP SCRIPT END.................................................. -->
<!-- ................................................PHP SCRIPT START.................................................. -->
                          				<?php
                                        if(isset($_SESSION['error1']))
                                        {
                                            if($_SESSION['c1']==1)
                                            {
                                                echo $_SESSION["error1"];}
                                                $_SESSION['c1']=2;
                                            }
                                        ?>
<!-- ................................................PHP SCRIPT START.................................................. -->
                            	    </span>
                            </label>
							<input type="password" name="password" />
								<span class="error">
                            	</span>
						</div>
						<div class="bottom">
							<div class="remember"><input type="checkbox" name="remember" /><span>Keep me logged in</span></div>
								<input type="submit" value="Login" name="submit"></input>
									<a href="registrationpage.php" rel="register" class="linkform">You don't have an account yet? Register here</a>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
        
        <div id="regremember">
  			<strong><p style="color:black; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  padding-top:0px; font-size:20px; margin-bottom:0px;">Create Account</p></strong>
      		<br /><br />
      		<p style="color:black; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  padding-top:0px; font-size:15px; margin-bottom:0px;">  Blood Donation Service connects blood seekers with blood donors in the time of need. Donate Blood, Save Lives!</p>
	  		<br /><br />
        	<p style="color:black; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  padding-top:0px; font-size:15px; margin-bottom:0px;">   Sign up as a registered blood bank today!</p> 
 			<br /><br /><br />
 			<div id="button1" class="e">
				<a href="registrationpage.php"><strong><p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;  padding-top:0px; font-size:20px; margin-left:10px; margin-bottom:10px; color:#CC0000">Sign Up</p></strong></strong></a>
			</div>
        </div>
	</div>
</div>
<!----------------------------------------------------- start footer ------------------------------------------->
<br /><br /><br />
<div id="footer">
	<p class="legal">
		@2014 Blood Donation Service. All Rights Reserved.
  </p>
</div>
<!---------------------------------------------------- end footer ---------------------------------------------->
</body>
</html>



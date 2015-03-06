<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Blood Donation Service</title>
		<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
        <style>

#aboutblood{
	position:absolute;
	left:10%;
	right:10%;
	font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
    font-size:14px;
	padding:10px;
	
}

/*######## Smart Green ########*/
.smart-green {
    margin-left:auto;
    margin-right:auto;

    max-width: 500px;
    background: #F8F8F8;
    padding: 30px 30px 20px 30px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #666;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.smart-green h1 {
    font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
    padding: 20px 0px 20px 40px;
    display: block;
    margin: -30px -30px 10px -30px;
    color: #FFF;
    background: #222222;
    text-shadow: 1px 1px 1px #949494;
    border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
    -moz-border-radius: 5px 5px 0px 0px;
    border-bottom:1px solid #89AF4C;

}
.smart-green h1>span {
    display: block;
    font-size: 11px;
    color: #FFF;
}

.smart-green label {
    display: block;
    margin: 0px 0px 5px;
}
.smart-green label>span {
    float: left;
    margin-top: 10px;
    color: #5E5E5E;
}
.smart-green input[type="text"], .smart-green input[type="email"], .smart-green textarea, .smart-green select {
    color: #555;
    height: 30px;
    line-height:15px;
    width: 100%;
    padding: 0px 0px 0px 10px;
    margin-top: 2px;
    border: 1px solid #E5E5E5;
    background: #FBFBFB;
    outline: 0;
    -webkit-box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
    box-shadow: inset 1px 1px 2px rgba(238, 238, 238, 0.2);
    font: normal 14px/14px Arial, Helvetica, sans-serif;
}
.smart-green textarea{
    height:100px;
    padding-top: 10px;
}
.smart-green select {
    background: url('down-arrow.png') no-repeat right, -moz-linear-gradient(top, #FBFBFB 0%, #E9E9E9 100%);
    background: url('down-arrow.png') no-repeat right, -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FBFBFB), color-stop(100%,#E9E9E9));
   appearance:none;
    -webkit-appearance:none; 
   -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width:100%;
    height:30px;
}
.smart-green .button {
    background-color: #222222;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-border-radius: 5px;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    text-shadow: 1px 1px 1px #949494;
}
.smart-green .button:hover {
    background-color:#80A24A;
}
</style>
        
		
</head>



<body>
<!-- start header -->
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
              <strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif">Blood, </strong>
              <strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif">Save
</strong> 
              <strong style="color:#292A2C; font-size:16px; font-family:Verdana, Geneva, sans-serif">Lives</strong>
		</div>
        <div id="menu">
        	<ul id="minitabs">
              <li><a href="index.php">Home</a></li>
              <li><a  href="loginpage.php">Sign In</a></li>
              <li><a href="registrationpage.php">Sign Up</a></li>
              <li><a href="aboutblood.php">Blood Tips</a></li>
              <li><a id="current" href="#">Contact Us</a></li>
			</ul>
        </div>  
        </a>   
</div>




<!-- end header -->
<div id="mid3" >
	<div id="temp">
		<div id="aboutblood">
			
			<form action="" method="post" class="smart-green">
			    <h1><b>Contact Form</b><br /> 
			        <span>Please fill all the texts in the fields.</span>
			    </h1>
			    <label>
			        <span><b>Your Name :</b></span>
			        <input id="name" type="text" name="name" placeholder="Your Full Name" />
			    </label>
			    
			    <label>
			        <span><b>Your Email :</b></span>
			        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
			    </label>
			    
			    <label>
			        <span><b>Message :</b></span>
			        <textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
			    </label> 
			    
			     <label>
			        <span>&nbsp;</span> 
			        <input type="button" class="button" value="Send" /> 
			    </label>    
			</form>

		</div>
	</div>
</div>
<!-- start footer -->
<br /><br /><br />
<div id="footer">
	<p class="legal">
		@2014 Blood Donation Service. All Rights Reserved.
  </p>
</div>
<!-- end footer -->
</body>
</html>

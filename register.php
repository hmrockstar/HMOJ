<?php
include_once 'dbconnect.php';
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
if(isset($_POST['btn-signup']))
{
 $uname = $mysqli->real_escape_string($_POST['uname']);
 $email = $mysqli->real_escape_string($_POST['email']);
 $upass = $mysqli->real_escape_string($_POST['pass']);
$mob = $mysqli->real_escape_string($_POST['num']);
$clg = $mysqli->real_escape_string($_POST['coll']);
 
if($mysqli->query("INSERT INTO users(handle,pass,clg,mob,email) VALUES('$uname','$upass','$clg','$mob','$email')"))
 {
  
  	$mysqli->query("INSERT INTO lead(handle,score) VALUES('$uname',0)");
       
       ?>
<script>alert("Successfully registered! Redirecting you to login page!");</script>
<?php
	echo "<script>setTimeout(\"location.href = 'index.php';\",500);</script>";
 }
 else
 {
  ?>
        <script>alert('error while registering you... Use a different handle or contact administrator');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Registration Form" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="ARUN GUPTA" />
<title>Registration System</title>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <link rel="icon" href="as.ico" type="image/x-icon">
</head>
<body>
 <div class="container">
  <div class="codrops-top">
     <span class="right">
                    <a href=http://www.aitpune.com target="blank">
                        <strong>AIT TECH AAKRITI</strong>
                    </a>
     </span>
      <div class="clr"></div>
  </div>
   <header>
                <h1>Registration Form</h1>
				<nav class="codrops-demos">
					
				</nav>
   </header>
    <section>				
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form autocomplete="on" method="post"> 
                                <h1>SIGN UP</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Handle </label>
                                    <input id="username" name="uname" required="required" type="text" placeholder="username "/>
                                </p>
                                 <p> 
                                    <label for="Email" class="mail" data-icon="u" >YOUR EMAIL</label>
                                    <input id="username" name="email" required="required" type="email" placeholder="mymail@mail.com"/>
                                </p>
                                 <p> 
                                    <label for="username" class="num" data-icon="u" >CONTACT NUMBER</label>
                                    <input type="number" maxlength="10" minlength="10" id="username" name="num" required="required" type="tel" placeholder="1234"/>
                                </p>
                            
                                 <p> 
                                    <label for="username" class="coll" data-icon="u" >COLLEGE</label>
                                    <input id="username" name="coll" required="required" type="text" placeholder="ait pune"/>
                                </p>

                                <p> 
                                    <label for="password" class="passwd" data-icon="p"> Your password </label>
                                    <input id="password" name="pass" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                               
                                <p class="login button"> 
                                    <input type="submit" value="SIGNUP"  name="btn-signup" /> 
                                </p>
                               
                                <p class="change_link">
									WANT TO SIGNIN?
									<a href="index.php" class="to_register">SIGNIN</a>
								</p>
                            </form>
                        </div>	
                    </div>
                </div>  
            </section>
</div>
</body>
</html>

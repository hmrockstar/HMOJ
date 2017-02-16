<?php
   include("dbconnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($mysqli,$_POST['email']);
      $mypassword = mysqli_real_escape_string($mysqli,$_POST['pass']); 
      
      $sql = "SELECT pass FROM users WHERE handle = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         ?> <script> alert("Wrong Password");</script>
         <?php
      }
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login System</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="ARUN GUPTA" />
        <link rel="shortcut icon" href="../favicon.ico"> 
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
                <h1>Login Form</h1>
				<nav class="codrops-demos">
				</nav>
            </header>
 <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email</label>
                                    <input id="username" name="email" required="required" type="text" placeholder="mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="pass" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login"  name="btn-login" /> 
								</p>
                               
                               <p class="change_link">
                                    want to sign up?
                                    <a href="register.php" class="to_register">SIGNUP</a>
                                </p>
                            </form>
                        </div>

                       
                    </div>
                </div>  
            </section>

</div>
</body>
</html>

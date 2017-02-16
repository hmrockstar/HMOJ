<?php
   include('session.php');
   
?>
<html>
<head>
	<link rel="icon" 
      type="image/png" 
      href="f.ico">
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>HMOJ</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="plugin/cm/lib/codemirror.css">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/.css" rel="stylesheet">
    <link rel="stylesheet" href="plugin/cm/theme/3024-night.css">
    <link rel="stylesheet" href="plugin/cm/theme/ambiance.css">
    <script src="plugin/cm/mode/javascript/javascript.js"></script>
     <script src="plugin/cm/mode/xml/xml.js"></script>
</head>

<body style='margin: 0px; font-family: 'Arima Madurai', cursive;'>	
	<div style="height: 7vh; background: #333; color: #fff;">
			<div class="container-fluid flex-center">
				<h3 style=""> HMOJ <a href = "logout.php">Sign Out</a> <a href = "lead.php">Leaderboard</a></h3>
			</div>
			<div style="position:relative;"><h6>Welcome <?php echo $login_session; ?></h6></div>
	</div>	
	<div class="view hm-black-slight" style="height: 85vh; color: #000;">
	<div align="right"><h6>Welcome <?php echo $login_session; ?></h6></div>
    	<div class="full-bg-img flex-center">	            
    		<div class="container-fluid flex-center">
				<form action="oj.php" method="get">
					Select Language:</br>
		                <select name="lang" id="lang">
		                    <option value="14">Bash (bash 4.0.35)</option>
		                    <option value="1">C (gcc-4.3.4)</option>
		                    <option value="9">C# (mono-2.8)</option>
		                    <option value="2" selected="selected">C++ (gcc-4.7.2)</option>
		                    <option value="2">C++ (gcc-4.5.1)</option>
		                    <option value="13">Clojure (clojure 1.1.0)</option>
		                    <option value="36">COBOL (open-cobol-1.0)</option>
		                    <option value="36">COBOL 85 (tinycobol-0.65.9)</option>
		                    <option value="54">Fortran (gfortran-4.3.4)</option>
		                    <option value="12">Haskell (ghc-6.8.2)</option>
		                    <option value="3">Java (sun-jdk-1.6.0.17)</option>
		                    <option value="20">JavaScript </option>
		                    <option value="25">Pascal</option>
		                    <option value="6">Perl (perl 5.12.1)</option>
		                    <option value="7">PHP (php 5.2.11)</option>
		                    <option value="5">Python </option>
		                    <option value="8">Ruby (ruby-1.9.2)</option>
		                    <option value="15">Scala (scala-2.8.0.final)</option>
		                    <option value="40">Tcl (tclsh 8.5.7)</option>
		                    <option value="37">Visual Basic .NET (mono-2.4.2.3)</option>
		                </select>
			</br>
			<input type="text" name="pcode" placeholder="Enter Problem Code" required> </br> 
			Enter Your Code: </br><textarea class="codemirror-textarea" name="name" id="name"></textarea> </br> 
		<div class="container">
		 <div class="row">
        	<div class="col-md-12" style="color: #000;">
					<button type="submit" class="btn" style="background: #222;"> Submit Code </button>
			</div>
		</div>
		</div>
	</form>

 </div>
</div>
</div>
				</div>

				<div style="height: 8vh">
					<div class="container-fluid flex-center" style="background: #333; color: #fff">
						<center><p> Written by: <a href="http://codeforces.com/profile/hmrockstar">Himanshu Mishra</a> <br> Using <a href="https://www.hackerrank.com/api/docs">Hackerrank API</a> &copy;
by <a href="http://hackerrank.com">Hackerrank</a></p></center>
					</div>
				</div>	

				<script type="text/javascript" src="js/jquery.min.js"></script>
				<script type="text/javascript" src="plugin/cm/lib/codemirror.js"></script>
				<script type="text/javascript" src="js/default.js"></script>
				<script type="text/javascript" src="plugin/cm/addon/edit/matchbrackets.js"></script>
				<script type="text/javascript" src="plugin/cm/addon/selection/active-line.js"></script>
				</body> 
</body>
</html>
<style>
    .view 
	{
	    background: url('https://static.pexels.com/photos/19578/pexels-photo.jpg')center fixed;
	    background-size: cover;
	}
</style>

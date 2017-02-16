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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <style type="text/css">
    	.navbar 
    	{
        	background: #333;
	    }
	    .top-nav-collapse
	    {
	        background: #333;
	    }
	    @media only screen and (max-width: 768px)
	    {
        	.navbar 
        	{
            	background: #333;
        	}
    	}
		.view 
		{
		    background: url("")center fixed;
		    background-size: cover;
		}
		</style>
		
    <script src="plugin/cm/mode/javascript/javascript.js"></script>
     <script src="plugin/cm/mode/xml/xml.js"></script>
     <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
           <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
			
            $("#driver").click(function(event){
				$("#loading").show();
				$("#stage").hide();
               $.post( 
                  "op.php",
                  {
            		inp: $('#inp').val(),
            		pcode:$('#pcode').val()
        		},
                  function(data) {
                     $('#stage').html(data); 
                     $("#loading").hide();
                     $("#stage").show();
                  }
               );
					
            });
            
				
         });
      </script>
</head>

<body style='margin: 0px; font-family: 'Arima Madurai', cursive;'>	
<header>
	<nav class="navbar scrolling-navbar" style="position: relative;">
		<button class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#togg"> <span class="fa fa-bars"> </span> </button>
		<div class="container">
			<div class="collapse navbar-toggleable-xs" id="togg">
				<a class="navbar-brand" href="#" style="color: #fff;"> HMOJ </a>
				<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="dash.php"> Dashboard </a>
					</li>
					<li class="nav-item" style="margin-top: 7px;">
						<a href = "lead.php" target="blank">Leaderboard</a> 
					</li>
				</ul>
				<ul class="nav navbar-nav nav-flex-icons">
					<li class="nav-item" style="margin-top: 11px; color: #fff;">
						<h6>Welcome <?php echo $login_session; ?></h6>
					</li>
					<li class="nav-item" style="margin-top: 8px; margin-left: 8px;">
						<a href = "logout.php">Sign Out</a>
					</li>
				</ul>
			</div>
		</div>
	</nav> 	
</header>

<div style="height: 81vh; color: #000;float: right; width: 50%; margin-top: 20px;">          
	<div class="container-fluid">
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
            </select></br>
            <input type="hidden" name="pcode" id="pcode" value="4">
			<br>Enter Your Code: </br><textarea class="codemirror-textarea" name="name" id="name"></textarea> </br> 
			<div class="container">
 				<div class="row">
					<div class="col-md-12" style="color: #000;">
						<button type="submit" class="btn btn-default" style="background: #222;"> Submit Code </button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="container-fluid" style="height:81vh;float:left;width: 50%;  margin-top: 20px;">
</br><b>Input Format: </b></br>
Enter an integer.</br>
</br><b>Contraint: </b></br>
-10<sub>17</sub> < n < 10<sub>17</sub>
</br>
</br><b>Output Format: </b></br>
A string without spaces and length less than 100.
</br>
</br>
	<form>
 <label><b>Enter Input</b>
 <textarea name="inp" id="inp"  required ></textarea>
 </label>
 <p>
 			<div class="col-md-12" style="color: #000;">
					<button type="button" class="btn btn-primary" style="background: #222;" id="driver"> Output </button>
			</div>
 </p>
 </form><img src="p.gif" id="loading" style="display: none;">
 <div id="stage"> </div>
 
 </div>

<div style="height: 8vh; width: 100%; float:left;">
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
</html>
<style>
    .view 
	{
	    background: url('https://static.pexels.com/photos/19578/pexels-photo.jpg')center fixed;
	    background-size: cover;
	}
</style>

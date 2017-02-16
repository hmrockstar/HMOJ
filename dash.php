<?php
   include('session.php');
   include('dbconnect.php');   
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
     <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
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
<div style="height:76.6vh; margin-top: 50px;"> 
<h3 style="text-align: center;"><u> DASHBOARD </u></h3>  <br>     
<table>
    <tr>
        <th>Problem</th>
        <th>Solved</th>       
    </tr>
    <?php
        $result = mysqli_query($mysqli,"SELECT COUNT(p1) as total FROM lead WHERE p1!=0;");
        $check = mysqli_query($mysqli,"SELECT * FROM lead WHERE handle='$login_session'");
        $data=mysqli_fetch_assoc($result);
        $ch=mysqli_fetch_assoc($check);
    ?>
		<tr><td><a href="prob1.php">Problem 1<?php if($ch['p1']) echo " &#10004;"?></a></td>
                      <?php echo "<td>{$data['total']}</td>
                      </tr>";
        $result = mysqli_query($mysqli,"SELECT COUNT(p2) as total FROM lead WHERE p2!=0;");
        $data=mysqli_fetch_assoc($result);
    ?>
		<tr><td><a href="prob2.php">Problem 2<?php if($ch['p2']) echo " &#10004;"?></a></td>
                      <?php echo "<td>{$data['total']}</td>
                      </tr>";
        $result = mysqli_query($mysqli,"SELECT COUNT(p3) as total FROM lead WHERE p3!=0;");
        $data=mysqli_fetch_assoc($result);
    ?>
		<tr><td><a href="prob3.php">Problem 3<?php if($ch['p3']) echo " &#10004;"?></a></td>
                      <?php echo "<td>{$data['total']}</td>
                      </tr>";
        $result = mysqli_query($mysqli,"SELECT COUNT(p4) as total FROM lead WHERE p4!=0;");
        $data=mysqli_fetch_assoc($result);
    ?>
		<tr><td><a href="prob4.php">Problem 4<?php if($ch['p4']) echo " &#10004;"?></a></td>
                      <?php echo "<td>{$data['total']}</td>
                      </tr>";
        $result = mysqli_query($mysqli,"SELECT COUNT(p5) as total FROM lead WHERE p5!=0;");
        $data=mysqli_fetch_assoc($result);
    ?>
		<tr><td><a href="prob5.php">Problem 5<?php if($ch['p5']) echo " &#10004;"?></a></td>
                      <?php echo "<td>{$data['total']}</td>
                      </tr>";

        
    ?>
</table>
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

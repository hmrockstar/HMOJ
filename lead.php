<html>
<head>
<title>LeaderBoard</title>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
</head>
<body>
<h1 style="text-align: center;"><u> LeaderBoard </u></h1>  <br>     
<table>
    <tr>
        <th>Rank</th>
        <th>User</th>
        <th>Score</th>
        <th>P1</th>
        <th>P2</th>
        <th>P3</th>
        <th>P4</th>
        <th>P5</th>       
    </tr>
    <?php
		include('dbconnect.php');
        $result = mysqli_query($mysqli,"SELECT * FROM lead ORDER BY score DESC");
        $rank = 1;
	$prev=0;
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
            $f=$row['p1']+$row['p2']+$row['p3']+$row['p4']+$row['p5'];
            $n=$row['handle'];
            $q="UPDATE lead SET score=$f WHERE handle='$n'";
        	$mysqli->query($q);
        	if($f<$prev)
        		$rank++;
        	$prev=$f;
                echo "<tr><td>{$rank}</td>
                      <td>{$row['handle']}</td>
                      <td>{$f}</td>
                      <td>{$row['p1']}</td>
                      <td>{$row['p2']}</td>
                      <td>{$row['p3']}</td>
                      <td>{$row['p4']}</td>
                      <td>{$row['p5']}</td>
                      </tr>";
            }
        }
    ?>
</table>
</body>
</html>

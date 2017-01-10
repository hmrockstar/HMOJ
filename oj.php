<html>
<head>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>HMOJ</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

</head>

<body style='margin: 0px; font-family: 'Arima Madurai', cursive;'>	
<div style="height: 7vh; background: #333; color: #fff;">
			<div class="container-fluid flex-center">
				<h3 style=""> HMOJ </h3>
			</div>
<div class="view hm-black-slight" style="height: 85vh; color: #000;">
<?php
$n="";
$flag=0;
if(!strcmp($_GET["name"],"$n"))
{
	echo "NO SOURCE CODE FOUND";
    return;	
}
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'api.hackerrank.com/checker/submission.json',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'source' => $_GET["name"],
        'lang'=>$_GET["lang"],
        'testcases'=>'["1","3","5"]',
        'api_key'=>'hackerrank|597045-1168|fe47359f9224d36df1ff58a1574e6c1fa5c15530'
    )
));
$resp = curl_exec($curl);
curl_close($curl);
$cnt=0;
echo "$resp";
$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($resp, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
echo "YOUR OUTPUT".'<br>'.'<br>';
foreach ($jsonIterator as $key => $val) {
    if(!strcmp("$key","stdout"))
    {
    	if(is_array($val))
    	{
    	foreach ($val as &$value) {
    		$cnt++;
    		echo $value.'<br>';
		}
		}
    }
}
echo '<br>';
$cases= file("testcase.txt");
$count=count($cases);
$i=0;
echo "VERDICT::  ";
$jsonIterators = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($resp, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
foreach ($jsonIterators as $key => $val) {
    if(!strcmp("$key","stdout"))
    {
    	if(is_array($val))
    	{
    	foreach ($val as &$value) {
            if(strcmp("$value","$cases[$i]"))
            {
            	$flag=1;
            }
            $i++;
		}
		}
		else
		{
			$flag=2;
    		
    	}
    }
}
if($flag==2)
{
	echo "Compilation Error";
}
else if($flag==1||$cnt!=$count-1)
{
	echo "Wrong Answer";
}
else 
echo "Accepted";
?>
</div>
<div style="height: 8vh">
					<div class="container-fluid flex-center" style="background: #333; color: #fff">
						<center><p> Written by: <a href="http://codeforces.com/profile/hmrockstar">Himanshu Mishra</a> <br> Using <a href="https://www.hackerrank.com/api/docs">Hackerrank API</a> &copy;
by <a href="http://hackerrank.com">Hackerrank</a></p></center>
					</div>
				</div>				
</body>
</html>

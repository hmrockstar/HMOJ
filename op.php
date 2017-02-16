<html>
<body>
<?php
    $inp = array($_REQUEST['inp']);
    $pcode = $_REQUEST['pcode'];
    $tc=json_encode($inp);
    $curl = curl_init();
    $pc=file_get_contents("prob/$pcode/pc1.txt"); 
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => 'api.hackerrank.com/checker/submission.json',
		CURLOPT_POST => 1,
		CURLOPT_POSTFIELDS => array(
		    'source' => $pc,
		    'lang'=>2,
		    'testcases'=>$tc,
		    'api_key'=>'hackerrank|597045-1168|fe47359f9224d36df1ff58a1574e6c1fa5c15530'
		)
	));
	$resp = curl_exec($curl);
	curl_close($curl);
	$cnt=0;
	//echo "$resp";
	$jsonIterator = new RecursiveIteratorIterator(
		new RecursiveArrayIterator(json_decode($resp, TRUE)),
		RecursiveIteratorIterator::SELF_FIRST);
	echo "<b>Your Output: </b>".'<br>';
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
 ?>
 </body>
 </html>

<?php
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
//echo "$resp";
$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($resp, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
echo "YOUR OUTPUT".'<br>'.'<br>';

foreach ($jsonIterator as $key => $val) {
    if($key=="stdout")
    {
    	if(is_array($val))
    	{
    	foreach ($val as &$value) {
    		echo $value.'<br>';
		}
		}
    }
}
echo '<br>';
$cases= file("testcase.txt");
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
                echo "Wrong Answer";
                return;
            }
            $i++;
		}
		}
		else
		
		{
    		echo "Compilation Error";
                return;
    	}
    }
}
echo "Accepted";
?>

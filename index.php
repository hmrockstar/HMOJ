<?php

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'api.hackerrank.com/checker/submission.json',
    //CURLOPT_USERAGENT => 'Codular Sample cURL Request',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'source' => $_GET["name"],
        'lang'=>'2',
        'testcases'=>'["1","2","3","345678"]',
        'api_key'=>'hackerrank|597045-1168|fe47359f9224d36df1ff58a1574e6c1fa5c15530'
    )
));
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
echo "$resp";
?>

<?php

/*$loc = file_get_contents(
    'https://ipapi.co/8.8.8.8/json/',
    false,
    stream_context_create([
        'http' => [
            'header' => "User-Agent: PostmanRuntime/7.32.2",
        ]
    ]),
);
//echo $loc;
$obj = json_decode($loc);*/

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://ipapi.co/8.8.8.8/json/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.82",
]);

$res = curl_exec($ch);
$obj = json_decode($res);

echo '<pre>' . print_r($obj, 1) . '</pre>';

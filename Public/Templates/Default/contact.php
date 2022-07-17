<?php

$url1 = 'https://gameinfo.albiononline.com/api/gameinfo/guilds/uhmotNBAQ6-0vi9PFysRBg/members';
$url2 = 'https://gameinfo.albiononline.com/api/gameinfo/guilds/DWkD4B0uSsGQoryrz8Nuwg/members';
$url3 = 'https://gameinfo.albiononline.com/api/gameinfo/guilds/wSbCgimqTPy470n-wDQXPQ/members';
$url4 = 'https://gameinfo.albiononline.com/api/gameinfo/guilds/nmc0HQW-TZirTlnGzwbF-w/members';
$url5 = 'https://gameinfo.albiononline.com/api/gameinfo/guilds/WpV4yaVxSLW8QXH2Be40cA/members'; 

$merged_urls = [$url1, $url2, $url3, $url4, $url5];

$api_endpoint = [];

foreach ($merged_urls as $urls) {
    $api_endpoint[] = file_get_contents($urls);
}

// Gives all DATA from all Guilds members
// var_dump($api_endpoint);  

$merged_arrays = array_merge(json_decode($api_endpoint[0], true), json_decode($api_endpoint[1], true), json_decode($api_endpoint[2], true), json_decode($api_endpoint[3], true), json_decode($api_endpoint[4], true));


foreach ($merged_arrays as $query) {
    echo $query['Name'];
    echo '<br>';
}

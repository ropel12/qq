<?php
require_once  './vendor/autoload.php';

use Satrio\Scrapdata\Util;

$p=Util::TrackResi(540500011882622,'jne');

// $p = json_decode(Util::GetWilayahJT(),true);
var_dump($p);


// $p = fopen('./src/Untitled-1.json','r+');
// $r = fgets($p);
// $l = json_decode($r,true);
// $l2=json_decode($l,true);
// // var_dump($l2);
// $pp = ["code"=>200, "data"=>[]];
// foreach($l2["data"] as $val){
//     if(!in_array(["city"=>$val["city"],"province"=>$val["province"]],$pp["data"])){
//         array_push($pp["data"],["city"=>$val["city"] , "province"=>$val["province"]]);
//     }
// }
// $header = array(
// 'POST /index/router/index.html HTTP/1.1',
// 'Host: jet.co.id',
// 'accept: application/json, text/javascript, */*; q=0.01',
// 'accept-language: en-US,en;q=0.9',
// 'content-type: application/x-www-form-urlencoded; charset=UTF-8',
// 'cookie: HWWAFSESID=4925773fb6c2b8081e; HWWAFSESTIME=1670083311838; think_var=en-us; PHPSESSID=1l39f4nduer315euae3frgtnv4; _gcl_au=1.1.1919027321.1670083313; _gid=GA1.3.62805522.1670083313; G_ENABLED_IDPS=google; _fbp=fb.2.1670083313625.1502598504; _gat_UA-236790491-1=1; _gat_gtag_UA_236790491_1=1; _ga=GA1.1.1172711214.1670083313; _ga_FNZN9DLGN1=GS1.1.1670083313.1.1.1670086017.0.0.0',
// 'origin: https://jet.co.id',
// 'referer: https://jet.co.id/rates',
// 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
// 'x-requested-with: XMLHttpRequest',
// 'x-simplypost-id: 8dd4576e0beb6900e8d422b8ac67b4d0',
// 'x-simplypost-signature: b7c806caee77957caef5eb98eb7e66e5');
// $data = "method=query%2FfindProCityArea&data=&pId=8dd4576e0beb6900e8d422b8ac67b4d0&pst=b7c806caee77957caef5eb98eb7e66e5";
// $curll = curl_init();
// curl_setopt($curll, CURLOPT_POST,1);
// curl_setopt($curll, CURLOPT_HTTPHEADER,$header);
// curl_setopt($curll, CURLOPT_URL,"https://jet.co.id/index/router/index.html");
// curl_setopt($curll, CURLOPT_SSL_VERIFYPEER, false );
// curl_setopt($curll, CURLOPT_RETURNTRANSFER, true );
// curl_setopt($curll, CURLOPT_POSTFIELDS,$data);
// curl_close($curll);
// $curl_content = curl_exec($curll);

// var_dump($curl_content);



// $array = array("a"=>"a", "b"=>"b", "c"=>"c","a"=>"a");
// $vals = array_count_values($array);
// var_dump($vals);


// $p= [["a"=>"a" , "c"=>"c"],["b"=>"b"]];
// var_dump($p);
// var_dump(in_array(["a"=>"a" , "c"=>"d"],$p));
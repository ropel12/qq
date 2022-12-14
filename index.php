<?php
require_once  './vendor/autoload.php';
use Satrio\Scrapdata\Util;




var_dump(Util::GetongkirRajaOngkir("Depok","Jakarta+Pusat",1,5,1,'all'));
// var_dump(Util::GetongkirRajaOngkir("Depok","Jakarta+Pusat",1,1,2,1));
//  var_dump(Util::GetWilayahAsal('sum'));
// $p=file_get_contents('https://pluginongkoskirim.com/front/asal?s=bog');
// var_dump($p);
// var_dump(Util::GetTarif("q",79,1,"w",119));
// $data = true;
// $data1 = false;
// if($data==false||$data ||$data==200||$data == 20000|| $data ==1){
//     echo "1";
// }

// var_dump(Util::GetWilayahTujuan("jak"));

// var_dump(Util::ConvertResiToJson(12));



// Util::GetWilayahRajaOngkir();

// $p= Util::GetWilayahJT();
//$l = json_decode($p,true);
// var_dump($p);
//

//foreach ($l["data"] as $res){
//   $w= Util::GetTarifJT(sender:"BADUNG",consignee:$res["city"],weight: 1);
//   array_push($arr,$w);
//}
// $dat = json_decode(Util::GetWilayahJT(), true);


// var_dump($dat);


//  $p = Util::TrackResi(540500011882622, 'jne');
//  var_dump($p);
// var_dump(Util::GetTarifJT("BOGOR","AMANATUN UTARA",1));

// var_dump(getenv('APP'));
// var_dump($lines,STR_PAD_LEFT);

// $p = json_decode(Util::GetWilayahJT(), true);
// var_dump($p);


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

// $ch = curl_init('https://www.jne.co.id/id/tracking/tarif');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// // get headers too with this line
// curl_setopt($ch, CURLOPT_HEADER, 1);
// $result = curl_exec($ch);

// // get cookie
// // multi-cookie variant contributed by @Combuster in comments



// $cookies = array();
// foreach ($matches[1] as $item) {
//     parse_str($item, $cookie);
//     $cookies = array_merge($cookies, $cookie);
// }
// var_dump($cookies);

// echo time() + 600;



// preg_match_all('/^Set-Cookie:\s*([^\;]*|)/mi', $result, $matches);
// var_dump($matches);


//  $curl = curl_init();
//  $data = "asal=Depok&tujuan=Jakarta+Pusat&berat=1&tipe=ongkir&kotaasal=115&kotatujuan=152&kurir=jne%3Atiki%3Apos%3Apcp%3Arpx%3Aesl&cari=Periksa+Ongkir";
//  curl_setopt($curl, CURLOPT_URL, "https://rajaongkir.com/");
//  curl_setopt($curl, CURLOPT_POST, 1);

//  curl_setopt($curl, CURLOPT_HEADER, 1);
//  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//  $res = curl_exec($curl);
//  curl_close($curl);
//  preg_match('/^Location:\s+([^\n]*)\w+/mi', $res, $matches);
//  preg_match('/([a-z0-9]+[^https:\/\/rajaongkir\.com\/hasil\/ongkir\?q\=].+)/im' ,$matches[1],$matchess);


// var_dump(Util::GetSetupRajaOngkir());

// $curl2 = curl_init();
// $jenis=0;
// $data2 = "q=$matchess[1]&i=$jenis";
// curl_setopt($curl2, CURLOPT_POST, 1);
// curl_setopt($curl2, CURLOPT_URL, "https://rajaongkir.com/json/ongkirResult");
// curl_setopt($curl2, CURLOPT_HTTPHEADER, array(
//     'POST /json/ongkirResult HTTP/1.1',
//     'Accept: */*',
//     'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
//     'Cache-Control: no-cache',
//     'Connection: keep-alive',
//     'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
//     'Cookie: _ga=GA1.2.1719113765.1670065087; rajaongkir_user_session=ADdXbQVjXTlSfVAkUW4ENQc2VmhTegJxVWYOfFsiVTMLagZmBAoGPgMxACJSOl5zUjwEMAk%2BU2lUd1RiV2hWYQJnVzBaZQ8zD2QGMANlDDwAYVdiBTNdYlIwUDNRYwRiBzNWZFNqAmdVYQ45WzNVOwszBjoENgZnA2QAIlI6XnNSPAQyCTxTaVR3VDlXLFYJAjVXMlo0D3IPZAZ7AyEMfwBtVyQFbF0yUjVQbVF2BDUHN1ZjU3YCO1U3DiFbaVVtCysGOgRlBmEDdwA7UnJeOlI3BDMJNlNxVCBUI1c5ViQCC1c3WjcPZQ9vBnwDcAxmACVXbQVnXTJSN1BtUXYESQdpVihTMQJuVW8Oblt%2BVW8LKwY4BHUGfwMCAGlSb15kUmkEdAl%2FU3NUG1QEV3xWZwJkV3haYA87DyEGXwM7DDMAYFdjBW1dI1J%2BUGFRYAQtByZWE1MoAnJVbw5qWwZVPwtnBkMEPAYjA3oANVIyXjdSKAQwCTpTc1R9VBtXFFYCAhlXGlp8DyAPbQZhAzkMOAB2VxAFM11gUm1QOFF9BCQHRVY6UyoCbVVuDmpbflVrCzUGPwR7BmcDewAwUi9eMFImBFAJbVM1VDRUIlc1VnkCYVdlWmcPLg8yBj4DcAxmACVXbQVnXTBSPFB1UTgEZQd1ViZTBwJjVWAOe1s4VSwLbAZ8BCwGdQNuAGlSO14xUjAENAk8U2FUZlRnV21WZgJiV21aIw86DzgGMgNwDCgAJVcyBSRdXFJiUDZRIARlByRWaVMrAjhVMw41W3NVeAs%2BBnU%3D; _gid=GA1.2.2094640807.1670237113; _gat=1',
//     'Host: rajaongkir.com',
//     'Origin: https://rajaongkir.com',
//     'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',
//     'X-Requested-With: XMLHttpRequest',
// ));

// curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl2, CURLOPT_POSTFIELDS, $data2);
// $res2 = curl_exec($curl2);
// curl_close($curl2);
// if(preg_match("/([error]+$)/im" ,$res2)){
//     echo "err";
//     return;
// }

// $html = new DOMDocument();

// $html->loadHTML($res2);

// $finder = new DomXPath($html);
// $classname= "ro-result";
// $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
// $resdat = ["data"=>[]];
// $i=0;
// $jenis2= match ($jenis){
//     0 => 'JNE',
//     1=> 'TIKI',
//     2=>'POS',
//     3=>'PCP',
//     4=>'RPX',
// };
// $i=0;
// foreach($nodes as $node){
// //    echo $node->nodeValue.PHP_EOL;
//     if(preg_match("/^($jenis2|RP)+([\s]*)([0-9\.]*$)/im", $node->nodeValue) == false){
//         array_push($resdat["data"],["serviceType"=>$node->nodeValue,"serviceFees"=>null]);
//     }
//     if (preg_match("/[^\s]*[0-9]$/im", $node->nodeValue, $arr)) {
//         $node->nodeValue = str_replace('.', '', $node->nodeValue);
//         $resdat["data"][$i]["serviceFees"]= $node->nodeValue;
//         $i++;
//     }

// }


// var_dump($resdat);


// var_dump((int)$res[0]);
// var_dump($p);

// var_dump($s->item(0)->textContent);
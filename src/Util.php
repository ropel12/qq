<?php
namespace Satrio\Scrapdata;

class Util {
    public static  $Curl;
    public static $url=  array("cekongkir"=>"https://pluginongkoskirim.com/front/resi", "jt"=>"https://jet.co.id/index/router/index.html");
    public static $_defaulHeaders= array('POST /front/resi HTTP/1.1',
        'Host: pluginongkoskirim.com',
        'Connection: keep-alive',
        'Upgrade-Insecure-Requests: 1',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
        'Accept:application/json, text/plain, */*',
        'Content-Type: application/json',
        'Cookie: _ga_97ZTBFJHQ9=GS1.1.1670055196.1.0.1670055196.0.0.0; _fbp=fb.1.1670055196761.876631211; _ga=GA1.2.611357943.1670055197; _gid=GA1.2.1196658529.1670055197; __gads=ID=7d5ecb25f680f502-22af8691b9d80058:T=1670055197:RT=1670055197:S=ALNI_MapyjKOjpTnO5TMmDZuC9VedDoyLQ; __gpi=UID=00000b88adeb0ee9:T=1670055197:RT=1670055197:S=ALNI_MaprCAXzunsqL9tOgH49RYFFJGIBg; FCNEC=%5B%5B%22AKsRol_LCC_Zp_658oE4_20RD1hN_xCLIRe7ERT31JkMLkAsP7qnZ-RzXzgzYSLHYlrCIddx_qu6KlVDe1EdIPI9ugOITxgNgwj2lbq5hqScBd3R-j71rI5xpFr9iQUUbCimLz1WPbh4I35kU5g6AFDNk89FWaF0VA%3D%3D%22%5D%2Cnull%2C%5B%5D%5D',
        'Accept-Language: en-US,en;q=0.8,id;q=0.6,fr;q=0.4');
     public static $_jtwilayah = array(
            'POST /index/router/index.html HTTP/1.1',
            'Host: jet.co.id',
            'accept: application/json, text/javascript, */*; q=0.01',
            'accept-language: en-US,en;q=0.9',
            'content-type: application/x-www-form-urlencoded; charset=UTF-8',
            'cookie: HWWAFSESID=4925773fb6c2b8081e; HWWAFSESTIME=1670083311838; think_var=en-us; PHPSESSID=1l39f4nduer315euae3frgtnv4; _gcl_au=1.1.1919027321.1670083313; _gid=GA1.3.62805522.1670083313; G_ENABLED_IDPS=google; _fbp=fb.2.1670083313625.1502598504; _gat_UA-236790491-1=1; _gat_gtag_UA_236790491_1=1; _ga=GA1.1.1172711214.1670083313; _ga_FNZN9DLGN1=GS1.1.1670083313.1.1.1670086017.0.0.0',
            'origin: https://jet.co.id',
            'referer: https://jet.co.id/rates',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36',
            'x-requested-with: XMLHttpRequest',
            'x-simplypost-id: 8dd4576e0beb6900e8d422b8ac67b4d0',
            'x-simplypost-signature: b7c806caee77957caef5eb98eb7e66e5');
    protected  static  function setupCurl($url)
    {
        $header = $url == self::$url["cekongkir"] ? self::$_defaulHeaders :self::$_jtwilayah ;
        self::$Curl = curl_init();
        curl_setopt( self::$Curl, CURLOPT_POST, true );
        curl_setopt( self::$Curl, CURLOPT_HTTPGET, false );
        curl_setopt( self::$Curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt( self::$Curl, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( self::$Curl, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( self::$Curl, CURLOPT_URL, $url);
    }

    public static function TrackResi($noresi,$kurir) {
        self::setupCurl(self::$url["cekongkir"],);
        $params = json_encode(array("kurir"=>  $kurir, "resi"=>$noresi));
        curl_setopt(self::$Curl,CURLOPT_POSTFIELDS,$params);
        $res = curl_exec(self::$Curl);
        curl_close(self::$Curl);
        $res=  json_decode($res,true);
        $res= self::ConvertResiToJson($res);
        return $res;

    }

    public static  function IfEmpty(bool|int $IsExist){
        if(!$IsExist || $IsExist != 20000){return json_encode(["code" => 404,"message"=>"Data Not Found"]);}
    }
    public static  function  ConvertResiToJson($data):string{
        self:self::IfEmpty($data["data"]["found"]);
        $first= $data["data"]['detail'];
        $second = $data["data"]['detail']["shipper"];
        $third= $data["data"]['detail']["consignee"];
        $res = [
            "status" =>"200",
            "data" =>  [
                "noresi"=> $first['code'],
                "service"=> $first['service'],
                "asal_pengiriman"=> $first['origin'],
                "tujuan_pengiriman"=> $first['destination'],
                "current_status"=> $first['status'],
                "pengirim" => ["nama"=> $second["name"],"address"=>$second["address"]],
                "penerima"=>["nama"=> $third['name'], "alamat"=>$third['address']],
                "current_position" => $first['current_position'],
                "history" => []
            ]
        ];
$i=0;

    foreach($first["history"] as $data){
        $res["data"]["history"][$i] = [
            "time" => $data["time"],
            "position" => $data["position"],
            "status" => $data["desc"]
        ];
        $i++;
    }
    
    return json_encode($res);

    }

public static function ConvertWilayahJtToJson(mixed $data){

    self::IfEmpty($data["code"]);
    $res = ["code"=> 200,"data"=>[]];
    foreach($data["data"] as $val){
            if(!in_array(["city"=>$val["city"],"province"=>$val["province"]],$res["data"])){
                array_push($res["data"],["city"=>$val["city"] , "province"=>$val["province"]]);
            }
        }
        return json_encode($res);
}

public static function GetWilayahJT(){
    $data = "method=query%2FfindProCityArea&data=&pId=8dd4576e0beb6900e8d422b8ac67b4d0&pst=b7c806caee77957caef5eb98eb7e66e5";
    self::setupCurl(self::$url["jt"]);
    curl_setopt(self::$Curl, CURLOPT_POSTFIELDS,$data);
    $res = curl_exec(self::$Curl);
    curl_close(self::$Curl);
    $res=  json_decode($res,true);
    $res= json_decode($res,true);
    $res=self::ConvertWilayahJtToJson($res);
    return $res;
}

public static function ConvertOngkirToJson(mixed $data){
    self::IfEmpty($data["code"]);
    $res = ["code"=> 200,"data"=>[]];
    foreach($data["data"] as $val){
            array_push($res["data"],["serviceType"=>$val["serviceType"], "price"=>$val["serviceFees"]]);
        }
        return json_encode($res);    
}

public static function GetTarifJT(){
    $data= "method=query%2FfindRate&data%5BsenderAddr%5D=BOGOR&data%5BreceiverAddr%5D=KALIDERES&data%5Bweight%5D=10&pId=8dd4576e0beb6900e8d422b8ac67b4d0&pst=b7c806caee77957caef5eb98eb7e66e5";
self::setupCurl(self::$url["jt"]);
curl_setopt(self::$Curl, CURLOPT_POSTFIELDS,$data);
    $res = curl_exec(self::$Curl);
    curl_close(self::$Curl);
    $res=  json_decode($res,true);
    $res=json_encode($res,true);

}


}




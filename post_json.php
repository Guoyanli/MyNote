<?php

$url = "http://10.14.17.8:8081/data/report/v2";  
$data = '{"ch":"toutiao","fr":"toutiao4133","action":2,"opcode":"101","pass_id":848797822,"end_time":"1537927340","product_id":"JXJ001","request_id":"112221"}';

function http_post_json($url, $data_string) {  
  
  $ch = curl_init();  
  curl_setopt($ch, CURLOPT_POST, 1);  
  curl_setopt($ch, CURLOPT_URL, $url);  
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
      'Content-Type: application/json; charset=utf-8',  
      'Content-Length: ' . strlen($data_string))  
  );  
  ob_start();  
  curl_exec($ch);  
  $return_content = ob_get_contents();  
  ob_end_clean();  
  $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);  
    return  $return_content;
}  


$aaa = http_post_json($url, $data);  
//print_r($aaa);
echo $aaa;

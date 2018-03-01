<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
$url = $_GET['url'];
$checkThis = $url . '?' . time() . '=' . time()*341;
check_url($checkThis);

function check_url($url) {
    $checkThis = $url . '?' . time() . '=' . time()*341;
    
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $checkThis);
    curl_setopt($c, CURLOPT_HEADER, TRUE);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($c, CURLOPT_FRESH_CONNECT, TRUE);
    curl_setopt($c, CURLOPT_FILETIME, TRUE);
    curl_setopt($c, CURLOPT_CERTINFO, TRUE);
    curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($c, CURLOPT_TIMEOUT, 15);
    curl_setopt($c, CURLOPT_DNS_CACHE_TIMEOUT, 0);
    curl_setopt($c, CURLOPT_COOKIESESSION, TRUE);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($c, CURLOPT_MAXREDIRS, 5);
    curl_setopt($c, CURLOPT_FORBID_REUSE, TRUE);
    
    $time = new DateTime();
    $time = $time->format('Y-m-d H:i:s');
    
    $json = new \stdClass();
    
    if (!curl_exec($c)) {
        $json->status = "down";
        $json->checkTime = $time;
        
        echo json_encode($json);
    }
    else {
        $json->status = "up";
        $json->latency = (((curl_getinfo($c)['size_download']/0.01)+(curl_getinfo($c)['namelookup_time']+curl_getinfo($c)['connect_time']+curl_getinfo($c)['appconnect']+curl_getinfo($c)['pretransfer_time']+curl_getinfo($c)['redirect_time']+curl_getinfo($c)['starttransfer_time'])*1000)/1000);
        $json->code = curl_getinfo($c)['http_code'];
        $json->size = curl_getinfo($c)['size_download'];
        $json->speed = 0.01;
        $json->lookup = curl_getinfo($c)['namelookup_time']*1000;
        $json->establish = curl_getinfo($c)['connect_time']*1000;
        $json->content = curl_getinfo($c)['content_type'];
        $json->ssl = if (explode('CN = ', explode('CN=', curl_getinfo($c)['certinfo'][1]['Subject'])[0])[1] === null) {"Not present")} else {curl_getinfo($c)['certinfo'][1]['Subject'])[0])[1]};
        $json->sslexp = if (explode('CN = ', explode('CN=', curl_getinfo($c)['certinfo'][0]['Expire date'] === null) {"Not present")} else {curl_getinfo($c)['certinfo'][0]['Expire date']};
        $json->checkTime = $time;
        
        echo json_encode($json);
    }
    curl_close($c);
}

?>

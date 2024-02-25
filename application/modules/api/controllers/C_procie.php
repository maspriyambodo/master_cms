<?php

/*
  curl "https://www.enterkomputer.com/jeanne/v2/product-list" --compressed -X POST -H "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0" -H "Accept: application/json" -H "Accept-Language: en-US,en;q=0.5" -H "Accept-Encoding: gzip, deflate, br" -H "Content-Type: application/json" -H "X-Requested-With: XMLHttpRequest" -H "Origin: https://www.enterkomputer.com" -H "Alt-Used: www.enterkomputer.com" -H "Connection: keep-alive" -H "Referer: https://www.enterkomputer.com/category/17/processor?showall=1708892777" -H "Cookie: _ga_34MD92JJJB=GS1.1.1708892671.41.1.1708893083.0.0.0; _ga=GA1.2.41752250.1707376322; ess=c5f8c76803cad1c491fc0275eca2e8a3b94173e5; _gid=GA1.2.1455704382.1708869636; csrf_cookie_name=d0abb16042af39f88fabcc2e9c9de9cd; _gat_gtag_UA_145258648_1=1" -H "Sec-Fetch-Dest: empty" -H "Sec-Fetch-Mode: cors" -H "Sec-Fetch-Site: same-origin" -H "TE: trailers" --data-raw "{""KCODE"":""17"",""SCODE"":""all"",""BCODE"":""all"",""BNAME"":"""",""MORDR"":""default"",""MSTGE"":""mapping"",""MKYWD"":"""",""MTAGS"":"""",""MSGMN"":""category"",""MPAGE"":1,""token"":""U2FsdGVkX1-E55sT1JEmUtTtgjHvzgK98PZU8pKsTjQf8t2cV6U0Rrrd5ijzmdtRiKOvKb944B267vLzsZdvag"",""signature"":""f76788a28fe9b43e536fe6aa53abe5f3""}"
  $session = New-Object Microsoft.PowerShell.Commands.WebRequestSession
  $session.Cookies.Add((New-Object System.Net.Cookie("_ga_34MD92JJJB", "GS1.1.1708892671.41.1.1708893083.0.0.0", "/", "www.enterkomputer.com")))
  $session.Cookies.Add((New-Object System.Net.Cookie("_ga", "GA1.2.41752250.1707376322", "/", "www.enterkomputer.com")))
  $session.Cookies.Add((New-Object System.Net.Cookie("ess", "c5f8c76803cad1c491fc0275eca2e8a3b94173e5", "/", "www.enterkomputer.com")))
  $session.Cookies.Add((New-Object System.Net.Cookie("_gid", "GA1.2.1455704382.1708869636", "/", "www.enterkomputer.com")))
  $session.Cookies.Add((New-Object System.Net.Cookie("csrf_cookie_name", "d0abb16042af39f88fabcc2e9c9de9cd", "/", "www.enterkomputer.com")))
  $session.Cookies.Add((New-Object System.Net.Cookie("_gat_gtag_UA_145258648_1", "1", "/", "www.enterkomputer.com")))
  Invoke-WebRequest -UseBasicParsing -Uri "https://www.enterkomputer.com/jeanne/v2/product-list" `
  -Method POST `
  -WebSession $session `
  -UserAgent "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:123.0) Gecko/20100101 Firefox/123.0" `
  -Headers @{
  "Accept" = "application/json"
  "Accept-Language" = "en-US,en;q=0.5"
  "Accept-Encoding" = "gzip, deflate, br"
  "X-Requested-With" = "XMLHttpRequest"
  "Origin" = "https://www.enterkomputer.com"
  "Alt-Used" = "www.enterkomputer.com"
  "Referer" = "https://www.enterkomputer.com/category/17/processor?showall=1708892777"
  "Sec-Fetch-Dest" = "empty"
  "Sec-Fetch-Mode" = "cors"
  "Sec-Fetch-Site" = "same-origin"
  "TE" = "trailers"
  } `
  -ContentType "application/json" `
  -Body "{`"KCODE`":`"17`",`"SCODE`":`"all`",`"BCODE`":`"all`",`"BNAME`":`"`",`"MORDR`":`"default`",`"MSTGE`":`"mapping`",`"MKYWD`":`"`",`"MTAGS`":`"`",`"MSGMN`":`"category`",`"MPAGE`":1,`"token`":`"U2FsdGVkX1-E55sT1JEmUtTtgjHvzgK98PZU8pKsTjQf8t2cV6U0Rrrd5ijzmdtRiKOvKb944B267vLzsZdvag`",`"signature`":`"f76788a28fe9b43e536fe6aa53abe5f3`"}"

 */
defined('BASEPATH') OR exit('trying to signin from backdoor?');

class C_procie extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->db_pc = $this->load->database('db_pc', true);
    }

    public function Set_procie() {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => base_url('data_enterkomputer/procie/intel/procie_intel.json'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: AGS_ROLES="419jqfa+uOZgYod4xPOQ8Q=="'
            )
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        $jso = json_decode($response, true);
        $data = [];
        $tot_data = count($jso['PCHLD']);
        for ($index = 0; $index < $tot_data; $index++) {
//            $jso['PCHLD'][$index]['PCHLD']
//            $jso['PCHLD'][$index2]['PLIST'][$index2]['PCODE']
            for ($index2 = 0; $index2 < count($jso['PCHLD'][$index]['PLIST']); $index2++) {
                $procie = explode('Socket', $jso['PCHLD'][$index]['PCHLD']);
                if (empty($procie[1])) {
                    $procies = explode('Xeon', $jso['PCHLD'][$index]['PCHLD']);
                    $procie['nama_core'] = 'Intel Xeon';
                    $procie['socket'] = trim($procies[1]);
                } else {
                    $procie['nama_core'] = trim($procie[0]);
                    $procie['socket'] = trim($procie[1]);
                }
                $data[] = [
                    'pcode' => $jso['PCHLD'][$index]['PLIST'][$index2]['PCODE'],
                    'nama_core' => $procie['nama_core'],
                    'nama' => $jso['PCHLD'][$index]['PLIST'][$index2]['PNAME'],
                    'socket' => $procie['socket'],
                    'id_procie_category' => 1,
                    'berat' => $jso['PCHLD'][$index]['PLIST'][$index2]['PWGHT'],
                    'qty' => $jso['PCHLD'][$index]['PLIST'][$index2]['PQTTY'],
                    'harga_modal' => $jso['PCHLD'][$index]['PLIST'][$index2]['PPRCZ'][0],
                    'harga_jual' => ($jso['PCHLD'][$index]['PLIST'][$index2]['PPRCZ'][0] + ($jso['PCHLD'][$index]['PLIST'][$index2]['PPRCZ'][0] * 0.1)),
                    'link' => 'https://enterkomputer.com/detail/' . $jso['PCHLD'][$index]['PLIST'][$index2]['PCODE'] . '/' . $jso['PCHLD'][$index]['PLIST'][$index2]['PLINK'],
                    'stat' => $jso['PCHLD'][$index]['PLIST'][$index2]['PSTTS'],
                    'syscreateuser' => 1,
                    'syscreatedate' => date('Y-m-d H:i:s')
                ];
            }
        }
        $this->db_pc->insert_batch('dt_procie', $data);
        echo 'update success';
    }

    public function Set_procie_amd() {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => base_url('data_enterkomputer/procie/amd/procie_amd.json'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: AGS_ROLES="419jqfa+uOZgYod4xPOQ8Q=="'
            )
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        $jso = json_decode($response, true);
        $data = [];
        $tot_data = count($jso['PCHLD']);
        for ($index = 0; $index < $tot_data; $index++) {
//            $jso['PCHLD'][$index]['PCHLD']
//            $jso['PCHLD'][$index2]['PLIST'][$index2]['PCODE']
            for ($index2 = 0; $index2 < count($jso['PCHLD'][$index]['PLIST']); $index2++) {
                $procie = explode('Socket', $jso['PCHLD'][$index]['PCHLD']);
                $data[] = [
                    'pcode' => $jso['PCHLD'][$index]['PLIST'][$index2]['PCODE'],
                    'nama_core' => trim($procie[0]),
                    'nama' => $jso['PCHLD'][$index]['PLIST'][$index2]['PNAME'],
                    'socket' => trim($procie[1]),
                    'id_procie_category' => 1,
                    'berat' => $jso['PCHLD'][$index]['PLIST'][$index2]['PWGHT'],
                    'qty' => $jso['PCHLD'][$index]['PLIST'][$index2]['PQTTY'],
                    'harga_modal' => $jso['PCHLD'][$index]['PLIST'][$index2]['PPRCZ'][0],
                    'harga_jual' => ($jso['PCHLD'][$index]['PLIST'][$index2]['PPRCZ'][0] + ($jso['PCHLD'][$index]['PLIST'][$index2]['PPRCZ'][0] * 0.1)),
                    'link' => 'https://enterkomputer.com/detail/' . $jso['PCHLD'][$index]['PLIST'][$index2]['PCODE'] . '/' . $jso['PCHLD'][$index]['PLIST'][$index2]['PLINK'],
                    'stat' => $jso['PCHLD'][$index]['PLIST'][$index2]['PSTTS'],
                    'syscreateuser' => 1,
                    'syscreatedate' => date('Y-m-d H:i:s')
                ];
            }
        }
//        print_array($data);
        $this->db_pc->insert_batch('dt_procie', $data);
        echo 'update success';
    }
}

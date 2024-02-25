<?php

defined('BASEPATH') OR exit('trying to signin from backdoor?');

class C_ssd extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->db_pc = $this->load->database('db_pc', true);
    }

    public function Set_ssd() {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => base_url('data_enterkomputer/ssd.json'),
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
        $data2 = [];
        $tot_data = count($jso['PPRNT']);
        for ($index = 0; $index < $tot_data; $index++) {
            $merek = $jso['PPRNT'][$index]['PPRNT'];
            $tot_data2 = count($jso['PPRNT'][0]['PCHLD']);
            for ($index2 = 0; $index2 < ($tot_data2 - 1); $index2++) {
                if (strpos($jso['PPRNT'][$index]['PCHLD'][$index2]['PCHLD'], 'Internal') !== false) {
                    $ssd_type = 1;
                } elseif (strpos($jso['PPRNT'][$index]['PCHLD'][$index2]['PCHLD'], 'External') !== false) {
                    $ssd_type = 2;
                } else {
                    $ssd_type = 0;
                }
                $data[] = [
                    'merek' => $merek,
                    'ssd_type' => $ssd_type,
                    'list' => $jso['PPRNT'][$index]['PCHLD'][$index2]['PLIST']
                ];
            }
        }
        for ($index3 = 0; $index3 < count($data); $index3++) {
            for ($index4 = 0; $index4 < count($data[$index3]['list']); $index4++) {
                $data2[] = [
                    'pcode' => $data[$index3]['list'][$index4]['PCODE'],
                    'merek' => $data[$index3]['merek'],
                    'nama' => $data[$index3]['list'][$index4]['PNAME'],
                    'ssd_type' => $data[$index3]['ssd_type'],
                    'harga_modal' => $data[$index3]['list'][$index4]['PPRCZ'][0],
                    'harga_jual' => ((int) $data[$index3]['list'][$index4]['PPRCZ'][0] + ((int) $data[$index3]['list'][$index4]['PPRCZ'][0] * 0.1)),
                    'berat' => $data[$index3]['list'][$index4]['PWGHT'],
                    'qty' => $data[$index3]['list'][$index4]['PQTTY'],
                    'stat' => $data[$index3]['list'][$index4]['PSTTS'],
                    'link' => 'https://enterkomputer.com/detail/' . $data[$index3]['list'][$index4]['PCODE'] . '/' . $data[$index3]['list'][$index4]['PLINK'],
                    'syscreateuser' => 1,
                    'syscreatedate' => date('Y-m-d H:i:s')
                ];
            }
        }
        $this->db_pc->insert_batch('dt_ssd', $data2);
        echo 'update success';
    }
}

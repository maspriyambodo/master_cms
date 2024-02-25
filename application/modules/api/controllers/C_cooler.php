<?php

defined('BASEPATH') OR exit('trying to signin from backdoor?');

class C_cooler extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->db_pc = $this->load->database('db_pc', true);
    }

    public function Set_cooler() {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => base_url('data_enterkomputer/cooler.json'),
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
        for ($index = 0; $index < count($jso['PPRNT']); $index++) {
            for ($index2 = 0; $index2 < (count($jso['PPRNT'][$index]) - 1); $index2++) {
                $data[] = [
                    'jenis' => $jso['PPRNT'][$index]['PPRNT'],
                    'merek' => $jso['PPRNT'][$index]['PCHLD'][$index2]['PCHLD'],
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
                    'jenis' => $data[$index3]['jenis'],
                    'harga_modal' => $data[$index3]['list'][$index4]['PPRCZ'][0],
                    'harga_jual' => ($data[$index3]['list'][$index4]['PPRCZ'][0] + ($data[$index3]['list'][$index4]['PPRCZ'][0] * 0.1)),
                    'berat' => $data[$index3]['list'][$index4]['PWGHT'],
                    'qty' => $data[$index3]['list'][$index4]['PQTTY'],
                    'stat' => $data[$index3]['list'][$index4]['PSTTS'],
                    'link' => 'https://enterkomputer.com/detail/' . $data[$index3]['list'][$index4]['PCODE'] . '/' . $data[$index3]['list'][$index4]['PLINK'],
                    'syscreateuser' => 1,
                    'syscreatedate' => date('Y-m-d H:i:s')
                ];
            }
        }
        $this->db_pc->insert_batch('dt_cooler', $data2);
        echo 'update success';
    }
}

<?php

defined('BASEPATH') OR exit('trying to signin from backdoor?');

class C_mobo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->db_pc = $this->load->database('db_pc', true);
    }

    public function Set_mobo() {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => base_url('data_enterkomputer/mobo.json'),
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
            for ($index2 = 0; $index2 < count($jso['PPRNT'][$index]['PCHLD'][0]['PLIST']); $index2++) {
                $data[] = [
                    'socket' => str_replace('Motherboard ', '', $jso['PPRNT'][$index]['PPRNT']),
                    'merek' => $jso['PPRNT'][$index]['PCHLD'][0]['PCHLD'],
                    'list' => $jso['PPRNT'][$index]['PCHLD'][0]['PLIST'][$index2]
                ];
            }
        }
        for ($index3 = 0; $index3 < count($data); $index3++) {
            if (strpos($data[$index3]['socket'], 'Intel') !== false) {
                $id_procie_category = 1;
            } else {
                $id_procie_category = 2;
            }
            $data2[] = [
                'pcode' => $data[$index3]['list']['PCODE'],
                'nama' => $data[$index3]['list']['PNAME'],
                'id_procie_category' => $id_procie_category,
                'socket' => $data[$index3]['socket'],
                'merek' => $data[$index3]['merek'],
                'berat' => $data[$index3]['list']['PWGHT'],
                'qty' => $data[$index3]['list']['PQTTY'],
                'harga_modal' => $data[$index3]['list']['PPRCZ'][0],
                'harga_jual' => ($data[$index3]['list']['PPRCZ'][0] + ($data[$index3]['list']['PPRCZ'][0] * 0.1)),
                'link' => 'https://enterkomputer.com/detail/' . $data[$index3]['list']['PCODE'] . '/' . $data[$index3]['list']['PLINK'],
                'stat' => $data[$index3]['list']['PSTTS'],
                'syscreateuser' => 1,
                'syscreatedate' => date('Y-m-d H:i:s')
            ];
        }
//        print_array($data2);
        $this->db_pc->insert_batch('dt_mobo', $data2);
        echo 'update success';
    }
}

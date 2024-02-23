<?php

defined('BASEPATH') OR exit('trying to signin from backdoor?');

class C_ram extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->db_pc = $this->load->database('db_pc', true);
    }

    public function Set_ram() {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => base_url('data_enterkomputer/ram_ddr4.json'),
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
            $merek = $jso['PCHLD'][$index]['PCHLD'];
            for ($index2 = 0; $index2 < count($jso['PCHLD'][$index]['PLIST']); $index2++) {
                if (strpos($jso['PCHLD'][$index]['PLIST'][$index2]['PNAME'], 'DDR3') !== false) {
                    $ddr_type = 'DDR3';
                } else {
                    $ddr_type = 'DDR4';
                }
                if (strpos($jso['PCHLD'][$index]['PLIST'][$index2]['PNAME'], '4GB') !== false) {
                    $size_ram = 4;
                } elseif (strpos($jso['PCHLD'][$index]['PLIST'][$index2]['PNAME'], '8GB') !== false) {
                    $size_ram = 8;
                } elseif (strpos($jso['PCHLD'][$index]['PLIST'][$index2]['PNAME'], '16GB') !== false) {
                    $size_ram = 16;
                } elseif (strpos($jso['PCHLD'][$index]['PLIST'][$index2]['PNAME'], '32GB') !== false) {
                    $size_ram = 32;
                } elseif (strpos($jso['PCHLD'][$index]['PLIST'][$index2]['PNAME'], '2GB') !== false) {
                    $size_ram = 2;
                } else {
                    $size_ram = 0;
                }
                $data[] = [
                    'pcode' => $jso['PCHLD'][$index]['PLIST'][$index2]['PCODE'],
                    'merek' => $merek,
                    'nama' => $jso['PCHLD'][$index]['PLIST'][$index2]['PNAME'],
                    'ddr_type' => $ddr_type,
                    'size_ram' => $size_ram,
                    'harga_modal' => $jso['PCHLD'][$index]['PLIST'][$index2]['PPRCZ'][0],
                    'harga_jual' => ($jso['PCHLD'][$index]['PLIST'][$index2]['PPRCZ'][0] * 0.1),
                    'berat' => $jso['PCHLD'][$index]['PLIST'][$index2]['PWGHT'],
                    'qty' => $jso['PCHLD'][$index]['PLIST'][$index2]['PQTTY'],
                    'stat' => $jso['PCHLD'][$index]['PLIST'][$index2]['PSTTS'],
                    'link' => 'https://enterkomputer.com/detail/' . $jso['PCHLD'][$index]['PLIST'][$index2]['PSTTS'] . '/' . $jso['PCHLD'][$index]['PLIST'][$index2]['PLINK'],
                    'syscreateuser' => 1,
                    'syscreatedate' => date('Y-m-d H:i:s')
                ];
            }
        }
//        print_array($data);
        $this->db_pc->insert_batch('dt_ram', $data);
        echo 'update success';
    }
}

<?php

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
}

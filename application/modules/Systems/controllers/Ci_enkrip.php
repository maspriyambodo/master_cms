<?php

defined('BASEPATH') OR exit('Error 404');

class Ci_enkrip extends CI_Controller {

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'item_active' => 'Systems/Ci_enkrip/index/',
            'privilege' => $this->bodo->Check_previlege('Systems/Ci_enkrip/index/'),
            'siteTitle' => 'CI Encryption | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Encrypt Class',
            'breadcrumb' => [
                0 => [
                    'nama' => 'index',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('ci_encrypt/ci_index', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

    public function Enc1() {
        $txt1 = Post_input('txt1');
        $enc = Enkrip($txt1);
        $result = [
            'stat' => true,
            'csrf' => $this->bodo->Csrf()['hash'],
            'txt' => $enc
        ];
        return ToJson($result);
    }

    public function Enc3() {
        $txt1 = Post_input('txt3');
        $enc = password_hash($txt1, PASSWORD_DEFAULT);
        $result = [
            'stat' => true,
            'csrf' => $this->bodo->Csrf()['hash'],
            'txt' => $enc
        ];
        return ToJson($result);
    }

    public function Dec1() {
        $txt1 = Post_input('txt2');
        $enc = Dekrip($txt1);
        $result = [
            'stat' => true,
            'csrf' => $this->bodo->Csrf()['hash'],
            'txt' => $enc
        ];
        return ToJson($result);
    }

}

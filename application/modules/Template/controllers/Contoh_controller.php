<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('NAMA_MODEL', 'ALIAS');
    }

    public function index() {
        $data = [
            'data' => $this->NAMA_MODEL->index(),
            'csrf' => $this->bodo->Csrf(),
            'item_active' => 'LINK MENU dari database',
            'privilege' => $this->bodo->Check_previlege('LINK MENU dari database'),
            'siteTitle' => 'Master Country | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Country',
            'breadcrumb' => [
                0 => [
                    'nama' => 'Country',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('contoh_view', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

}

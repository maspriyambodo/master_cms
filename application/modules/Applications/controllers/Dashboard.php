<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->user = $this->bodo->Dec($this->session->userdata('id_user'));
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'item_active' => 'Applications/Dashboard/index/',
            'privilege' => $this->bodo->Check_previlege('Applications/Dashboard/index/'),
            'siteTitle' => 'Dashboard Application | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Dashboard',
            'breadcrumb' => [
                0 => [
                    'nama' => 'Dashboard',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('v_dashboard', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

}

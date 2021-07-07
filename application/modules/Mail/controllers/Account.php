<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_mail', 'model');
        $this->user = $this->bodo->Dec($this->session->userdata('id_user'));
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'item_active' => 'Mail/Account/index/',
            'privilege' => $this->bodo->Check_previlege('Mail/Account/index/'),
            'siteTitle' => 'Email Account | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Email Account Management',
            'breadcrumb' => [
                0 => [
                    'nama' => 'index',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('account/index', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

}

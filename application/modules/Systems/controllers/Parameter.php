<?php

defined('BASEPATH') OR exit('trying to signin from backdoor?');

class Parameter extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_param', 'model');
        $this->user = Dekrip($this->session->userdata('id_user'));
    }

    public function index() {
        $data = [
            'data' => $this->model->index(),
            'csrf' => $this->bodo->Csrf(),
            'item_active' => 'Systems/Parameter/index/',
            'privilege' => $this->bodo->Check_previlege('Systems/Parameter/index/'),
            'siteTitle' => 'Parameters Management | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'System Parameters',
            'breadcrumb' => [
                0 => [
                    'nama' => 'index',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('param/param_index', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

}

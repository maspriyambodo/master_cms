<?php

defined('BASEPATH') OR exit('404 not found');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_finance', 'model');
        $this->user = $this->bodo->Dec($this->session->userdata('id_user'));
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'uang_masuk' => $this->model->m_uang_masuk(),
            'item_active' => 'Applications/Finance/Dashboard/index/',
            'privilege' => $this->bodo->Check_previlege('Applications/Finance/Dashboard/index/'),
            'siteTitle' => 'Finance Dashboard | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Finance Dashboard',
            'breadcrumb' => [
                0 => [
                    'nama' => 'Dashboard',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('finance/finance_index', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

    public function Save() {
        $tgl = date_create(Post_input('tgltxt'));
        $new_tgl = date_format($tgl, 'Y-m-d');
        $nominal = str_replace('.', '', Post_input('nomtxt'));
        $data = [
            'jenis' => Post_input('jenistxt'),
            'tgl' => $new_tgl,
            'nominal' => $nominal,
            'keterangan' => $this->input->post('kettxt', false),
            'stat' => 1,
            'syscreateuser' => $this->user,
            'syscreatedate' => date('Y-m-d')
        ];
        $exec = $this->model->m_save($data);
        if ($exec) {
            $result = redirect(base_url('Applications/Finance/Dashboard/index/'), $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan data!'));
        } else {
            $result = redirect(base_url('Applications/Finance/Dashboard/index/'), $this->session->set_flashdata('err_msg', 'gagal ketika menambah data!'));
        }
        return $exec;
    }

}

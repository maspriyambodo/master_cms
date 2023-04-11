<?php

defined('BASEPATH') or exit('404 not found');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_finance', 'model');
        $this->user = (int) dekrip($this->session->userdata('id_user'));
    }

    public function index()
    {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'uang_masuk' => $this->model->m_mutasi(),
            'bulan' => $this->model->m_bulan(),
            'item_active' => 'finance',
            'privilege' => $this->bodo->Check_previlege('finance'),
            'siteTitle' => 'Finance Dashboard | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Finance Month ' . date('F'),
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

    public function filter()
    {
        $param = Dekrip(Post_get('token'));
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'uang_masuk' => $this->model->m_mutasi(date('m', strtotime($param))),
            'bulan' => $this->model->m_bulan(date('m', strtotime($param))),
            'item_active' => 'finance',
            'privilege' => $this->bodo->Check_previlege('finance'),
            'siteTitle' => 'Finance Dashboard | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Finance Month ' . date('F', strtotime($param)),
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

    public function Save()
    {
        $tgl = date_create(post_input('tgltxt'));
        $new_tgl = date_format($tgl, 'Y-m-d');
        $nominal = str_replace(['.', ','], '', post_input('nomtxt'));
        $data = [
            'jenis' => post_input('jenistxt'),
            'tgl' => $new_tgl,
            'nominal' => $nominal,
            'keterangan' => $this->input->post('kettxt', false),
            'stat' => 1,
            'syscreateuser' => $this->user,
            'syscreatedate' => date('Y-m-d')
        ];
        $exec = $this->model->m_save($data);
        if ($exec) {
            $result = redirect(base_url('finance'), $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan data!'));
        } else {
            $result = redirect(base_url('finance'), $this->session->set_flashdata('err_msg', 'gagal ketika menambah data!'));
        }
        return $exec;
    }

    public function Update()
    {
        $tgl = date_create(post_input('e_tgltxt'));
        $new_tgl = date_format($tgl, 'Y-m-d');
        $nominal = str_replace(['.', ','], '', post_input('e_nomtxt'));
        $id_dt = dekrip(post_input('e_id'));
        $data = [
            'jenis' => post_input('e_jenistxt'),
            'tgl' => $new_tgl,
            'nominal' => $nominal,
            'keterangan' => $this->input->post('e_kettxt', false),
            'sysupdateuser' => $this->user,
            'sysupdatedate' => date('Y-m-d H:i:s')
        ];
        $exec = $this->model->m_update($data, $id_dt);
        if ($exec) {
            $result = redirect(base_url('finance'), $this->session->set_flashdata('succ_msg', 'Berhasil mengubah data!'));
        } else {
            $result = redirect(base_url('finance'), $this->session->set_flashdata('err_msg', 'gagal ketika mengubah data!'));
        }
        return $exec;
    }

    public function Delete()
    {
        $id_dt = dekrip(post_input('id'));
        $exec = $this->model->m_delete($id_dt);
        if ($exec) {
            $response = [
                'stat'=>true
            ];
        } else {
            $response = [
                'stat'=>false
            ];
        }
        return ToJson($response);
    }

    public function get_data()
    {
        $id = Dekrip(Post_get('token'));
        $data = [];
        $exec = $this->model->mGetData($id);
        if ($id) {
            foreach ($exec as $value) {
                $data['stat'] = true;
                $data['id'] = $value->id;
                $data['jenis'] = $value->jenis;
                $data['tgl'] = $value->tgl;
                $data['nominal'] = number_format($value->nominal);
                $data['keterangan'] = $value->keterangan;
            }
        } else {
            $data['stat'] = false;
        }
        return ToJson($data);
    }
}

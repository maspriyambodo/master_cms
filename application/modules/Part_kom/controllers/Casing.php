<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Casing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_casing', 'model');
        $this->user = $this->bodo->Dec($this->session->userdata('id_user'));
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'item_active' => 'casing',
            'privilege' => $this->bodo->Check_previlege('casing'),
            'siteTitle' => 'Data Casing | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Casing',
            'breadcrumb' => [
                0 => [
                    'nama' => 'Casing',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('v_casing', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

    public function lists() {
        $list = $this->M_users->lists();
        $data = [];
        $no = post_get("start");
        $privilege = $this->bodo->Check_previlege('casing');
        foreach ($list as $users) {
            $id_user = Enkrip($users->id);
            if ($users->stat) {
                $stat = '<span class="label label-success label-inline font-weight-lighter mr-2">active</span>';
            } else {
                $stat = '<span class="label label-danger label-inline font-weight-lighter mr-2">nonactive</span>';
            }
            if ($privilege['update']) {
                $editbtn = '<button id="edit_user" type="button" class="btn btn-icon btn-default btn-xs" title="Edit ' . $users->uname . '" value="' . $id_user . '" onclick="Edit(this.value)"><i class="far fa-edit"></i></button>';
            } else {
                $editbtn = null;
            }
            if ($privilege['delete'] and $users->stat) {
                $activebtn = null;
                $delbtn = '<button id="del_user" type="button" class="btn btn-icon btn-danger btn-xs" title="Delete ' . $users->uname . '" value="' . $id_user . '" onclick="Delete(this.value)"><i class="far fa-trash-alt"></i></button>';
                $reset_pwd = '<button id="reset_password" type="button" class="btn btn-icon btn-default btn-xs" title="Reset Password ' . $users->uname . '" value="' . $id_user . '" onclick="Reset_pwd(this.value)"><i class="fas fa-key"></i></button>';
            } elseif ($privilege['delete'] and !$users->stat) {
                $delbtn = null;
                $reset_pwd = '<button id="reset_password" type="button" class="btn btn-icon btn-default btn-xs" title="Reset Password ' . $users->uname . '" value="' . $id_user . '" onclick="Reset_pwd(this.value)"><i class="fas fa-key"></i></button>';
                $activebtn = '<button id="act_user" type="button" class="btn btn-icon btn-success btn-xs" title="Activate ' . $users->uname . '" value="' . $id_user . '" onclick="Active(this.value)"><i class="fas fa-unlock"></i></button>';
            } else {
                $delbtn = null;
                $activebtn = null;
                $reset_pwd = null;
            }
            $no++;
            $row = [];
            $row[] = $no;
            $row[] = $users->uname;
            $row[] = $users->name;
            $row[] = $stat;
            $row[] = '<div class="btn-group">' . $editbtn . $reset_pwd . $delbtn . $activebtn . '</div>';
            $data[] = $row;
        }
        return $this->_list($data, $privilege);
    }

    private function _list($data, $privilege) {
        if ($privilege['read']) {
            $output = [
                "draw" => post_get('draw'),
                "recordsTotal" => $this->M_users->count_all(),
                "recordsFiltered" => $this->M_users->count_filtered(),
                "data" => $data
            ];
        } else {
            $output = [
                "draw" => post_get('draw'),
                "recordsTotal" => 0,
                "recordsFiltered" => 0,
                "data" => []
            ];
        }
        return ToJson($output);
    }
}

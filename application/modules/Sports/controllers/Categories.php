<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->user = $this->bodo->Dec($this->session->userdata('id_user'));
        $this->load->model('M_Categories', 'model');
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'item_active' => 'Sports/Categories/index/',
            'privilege' => $this->bodo->Check_previlege('Sports/Categories/index/'),
            'siteTitle' => 'Master Sport Categories | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Sport Categories',
            'breadcrumb' => [
                0 => [
                    'nama' => 'Categories',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('categories/index', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

    public function Lists() {
        $list = $this->model->lists();
        $data = [];
        $no = Post_input("start");
        $privilege = $this->bodo->Check_previlege('Sports/Categories/index/');
        foreach ($list as $users) {
            $id_user = Enkrip($users->id);
            if ($users->stat == 1) {
                $stat = '<span class="label label-success label-inline font-weight-lighter mr-2">active</span>';
            } else {
                $stat = '<span class="label label-danger label-inline font-weight-lighter mr-2">nonactive</span>';
            }
            if ($privilege['update']) {
                $editbtn = '<button type="button" class="btn btn-icon btn-default btn-xs" title="Edit ' . $users->nama . '" value="' . $id_user . '" onclick="Edit(this.value)" data-toggle="modal" data-target="#modal_edit"><i class="far fa-edit"></i></button>';
            } else {
                $editbtn = null;
            }
            if ($privilege['delete'] and $users->stat == 1) {
                $activebtn = null;
                $delbtn = '<button type="button" class="btn btn-icon btn-danger btn-xs" title="Delete ' . $users->nama . '" value="' . $id_user . '" onclick="Delete(this.value)" data-toggle="modal" data-target="#modal_delete"><i class="far fa-trash-alt"></i></button>';
            } elseif ($privilege['delete'] and $users->stat != 1) {
                $delbtn = null;
                $activebtn = '<button type="button" class="btn btn-icon btn-success btn-xs" title="Activate ' . $users->nama . '" value="' . $id_user . '" onclick="Active(this.value)"><i class="fas fa-unlock"></i></button>';
            } else {
                $delbtn = null;
                $activebtn = null;
            }
            $no++;
            $row = [];
            $row[] = $no;
            $row[] = $users->nama;
            $row[] = $users->description;
            $row[] = $stat;
            $row[] = '<div class="btn-group">' . $editbtn . $delbtn . $activebtn . '</div>';
            $data[] = $row;
        }
        $output = array(
            "draw" => Post_input('draw'),
            "recordsTotal" => $this->model->count_all(),
            "recordsFiltered" => $this->model->count_filtered(),
            "data" => $data,
        );
        ToJson($output);
    }

    public function Add() {
        $data = [
            'nama' => Post_input('categorie_a'),
            'description' => Post_input('description_a'),
            'stat' => 1,
            'syscreateuser' => $this->user,
            'syscreatedate' => date('Y-m-d H:i:s')
        ];
        $this->model->Add($data);
    }

    public function Get_data() {
        $id = $this->bodo->Dec(Post_get('id'));
        $exec = $this->model->Detail($id);
        if ($exec) {
            $response = [
                'stat' => true,
                'results' => $exec
            ];
        } else {
            $response = [
                'stat' => false,
                'results' => []
            ];
        }
        ToJson($response);
    }

    public function Update() {
        $id = $this->bodo->Dec(Post_input('id_e'));
        $data = [
            'nama' => Post_input('categorie_e'),
            'description' => Post_input('description_e'),
            'stat' => 1,
            'sysupdateuser' => $this->user,
            'sysipdatedate' => date('Y-m-d H:i:s')
        ];
        $this->model->Update($data, $id);
    }

    public function Delete() {
        $id = $this->bodo->Dec(Post_input('d_id'));
        $data = [
            'stat' => 0,
            'sysdeleteuser' => $this->user,
            'sysdeletedate' => date('Y-m-d H:i:s')
        ];
        $this->model->Delete($data, $id);
    }
    
    public function Activate() {
        $id = $this->bodo->Dec(Post_input('act_id'));
        $data = [
            'stat' => 1,
            'sysupdateuser' => $this->user,
            'sysipdatedate' => date('Y-m-d H:i:s')
        ];
        $this->model->Activated($data, $id);
    }

}

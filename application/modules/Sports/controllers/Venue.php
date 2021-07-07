<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Venue extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->user = $this->bodo->Dec($this->session->userdata('id_user'));
        $this->load->model('M_Venue', 'model');
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'item_active' => 'Sports/Venue/index/',
            'privilege' => $this->bodo->Check_previlege('Sports/Venue/index/'),
            'siteTitle' => 'Master Sports Venue | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Sports Venue',
            'breadcrumb' => [
                0 => [
                    'nama' => 'Venue',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('venue/index', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

    public function Lists() {
        $list = $this->model->lists();
        $data = [];
        $no = Post_input("start");
        $privilege = $this->bodo->Check_previlege('Sports/Venue/index/');
        foreach ($list as $value) {
            $id_user = Enkrip($value->id);
            if ($value->stat == 1) {
                $stat = '<span class="label label-success label-inline font-weight-lighter mr-2">active</span>';
            } else {
                $stat = '<span class="label label-danger label-inline font-weight-lighter mr-2">nonactive</span>';
            }
            if ($privilege['update']) {
                $editbtn = '<button type="button" class="btn btn-icon btn-default btn-xs" title="Edit ' . $value->nama . '" value="' . $id_user . '" onclick="Edit(this.value)" data-toggle="modal" data-target="#modal_edit"><i class="far fa-edit"></i></button>';
            } else {
                $editbtn = null;
            }
            if ($privilege['delete'] and $value->stat == 1) {
                $activebtn = null;
                $delbtn = '<button type="button" class="btn btn-icon btn-danger btn-xs" title="Delete ' . $value->nama . '" value="' . $id_user . '" onclick="Delete(this.value)" data-toggle="modal" data-target="#modal_delete"><i class="far fa-trash-alt"></i></button>';
            } elseif ($privilege['delete'] and $value->stat != 1) {
                $delbtn = null;
                $activebtn = '<button type="button" class="btn btn-icon btn-success btn-xs" title="Activate ' . $value->nama . '" value="' . $id_user . '" onclick="Active(this.value)"><i class="fas fa-unlock"></i></button>';
            } else {
                $delbtn = null;
                $activebtn = null;
            }
            $no++;
            $row = [];
            $row[] = $no;
            $row[] = $value->nama;
            $row[] = $value->alamat;
            $row[] = $value->tlp;
            $row[] = $value->provinsi;
            $row[] = $value->kabupaten;
            $row[] = $value->kecamatan;
            $row[] = $value->kelurahan;
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

}

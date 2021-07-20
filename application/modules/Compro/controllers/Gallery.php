<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Product:        System of AU+ PRODUCTION
 * License Type:   Company
 * Access Type:    Multi-User
 * License:        https://maspriyambodo.com
 * maspriyambodo@gmail.com
 * 
 * Thank you,
 * maspriyambodo
 */

/**
 * Description of Profile
 *
 * @author centos
 */
class Gallery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_Gallery', 'model');
        $this->user = $this->bodo->Dec($this->session->userdata('id_user'));
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'item_active' => 'Compro/Gallery/index/',
            'privilege' => $this->bodo->Check_previlege('Compro/Gallery/index/'),
            'siteTitle' => 'Portfolio Gallery | Company Profile',
            'pagetitle' => 'Portfolio',
            'breadcrumb' => [
                0 => [
                    'nama' => 'index',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('galeri/index', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

    public function Lists() {
        $list = $this->model->lists();
        $data = [];
        $no = Post_input("start");
        $privilege = $this->bodo->Check_previlege('Compro/Gallery/index/');
        foreach ($list as $galeri) {
            $id = Enkrip($galeri->id);
            if ($galeri->stat == 1) {
                $stat = '<span class="label label-success label-inline font-weight-lighter mr-2">active</span>';
            } else {
                $stat = '<span class="label label-danger label-inline font-weight-lighter mr-2">nonactive</span>';
            }
            if ($privilege['update']) {
                $editbtn = '<button id="edit_user" type="button" class="btn btn-icon btn-default btn-xs" title="Edit" value="' . $id . '" data-toggle="modal" onclick="Edit(this.value)"><i class="far fa-edit"></i></button>';
            } else {
                $editbtn = null;
            }
            if ($privilege['delete'] and $galeri->stat) {
                $activebtn = null;
                $delbtn = '<button id="del_user" type="button" class="btn btn-icon btn-danger btn-xs" title="Delete" value="' . $id . '" data-toggle="modal" data-target="#modal_delete" onclick="Delete(this.value)"><i class="far fa-trash-alt"></i></button>';
            } elseif ($privilege['delete'] and!$galeri->stat) {
                $delbtn = null;
                $activebtn = '<button id="act_user" type="button" class="btn btn-icon btn-success btn-xs" title="Activate" value="' . $id . '" data-toggle="modal" data-target="#modal_active" onclick="Active(this.value)"><i class="fas fa-unlock"></i></button>';
            } else {
                $delbtn = null;
                $activebtn = null;
            }
            $no++;
            $row = [];
            $row[] = $no;
            $row[] = $galeri->tipe;
            $row[] = $galeri->title;
            $row[] = $galeri->lowres;
//            $row[] = $galeri->highres;
            $row[] = $galeri->desc;
            $row[] = $stat;
            $row[] = '<div class="btn-group">' . $editbtn . $delbtn . $activebtn . '</div>';
            $data[] = $row;
        }
        return $this->_list($data, $privilege);
    }

    private function _list($data, $privilege) {
        if ($privilege['read']) {
            $output = [
                "draw" => Post_input('draw'),
                "recordsTotal" => $this->model->count_all(),
                "recordsFiltered" => $this->model->count_filtered(),
                "data" => $data
            ];
        } else {
            $output = [
                "draw" => Post_input('draw'),
                "recordsTotal" => 0,
                "recordsFiltered" => 0,
                "data" => []
            ];
        }
        ToJson($output);
    }

}

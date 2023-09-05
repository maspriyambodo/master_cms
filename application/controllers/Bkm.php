<?php

defined('BASEPATH') OR exit('doh!');

class Bkm extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BkmModel', 'model');
        $this->load->library('ftp');
    }

    public function Upload() {
        $data = [
            'prov' => $this->model->Prov()
        ];
        return $this->load->view('bkm_upload', $data);
    }

    private function _Upload($param) {
        $result = [];
        $config['upload_path'] = FCPATH . $param['upload_path'];
        $config['file_name'] = $param['file_name'];
        $config['allowed_types'] = 'jpg|jpeg|png|docx|pdf';
        $config['max_size'] = 2000;
        $config['maintain_ratio'] = true;
        $config['file_ext_tolower'] = true;
        $config['remove_spaces'] = true;
        $config['overwrite'] = true;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload($param['input_name']) == true) {
            $result = $this->upload->data();
            $result['status'] = true;
        } else {
            $result['status'] = false;
        }
        return $result;
    }

    public function Save() {
        $prov = $this->input->post('provtxt');
        $kab = $this->input->post('kabtxt');
        $kec = $this->input->post('kectxt');
        $kel = $this->input->post('keltxt');
        $tingkat = $this->input->post('tingkattxt');
        $filename = null;
        if ($tingkat == 1) {
            $filename = '/' . $prov;
            if (!is_dir('assets/bkm' . $filename)) {
                $this->ftp->mkdir('assets/bkm' . $filename, 0755);
            }
        } elseif ($tingkat == 2) {
            $filename = '/' . $prov . '/' . $kab;
            if (!is_dir('assets/bkm' . $filename)) {
                $this->ftp->mkdir('assets/bkm' . $filename, 0755);
            }
        } elseif ($tingkat == 3) {
            $filename = '/' . $prov . '/' . $kab . '/' . $kec;
            if (!is_dir('assets/bkm' . $filename)) {
                $this->ftp->mkdir('assets/bkm' . $filename, 0755);
            }
        } elseif ($tingkat == 4) {
            $filename = '/' . $prov . '/' . $kab . '/' . $kec . '/' . $kel;
            if (!is_dir('assets/bkm' . $filename)) {
                $this->ftp->mkdir('assets/bkm' . $filename, 0755);
            }
        } else {
            return false;
        }
        $param = [
            'upload_path' => 'assets/bkm' . $filename,
            'file_name' => md5(round(microtime(true) * 1000)),
            'input_name' => "bkmtxt",
        ];
    }

    public function Getkab() {
        $id = $this->input->post_get('id_provinsi');
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($this->model->Getkab($id), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

    public function Getkec() {
        $id = $this->input->post_get('id_kec');
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($this->model->Getkec($id), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

    public function Getkel() {
        $id = $this->input->Post_get('id_kec');
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($this->model->Getkel($id), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }
}

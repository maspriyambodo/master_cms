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
            $result = $this->upload->data();
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
        $filename2 = md5(round(microtime(true) * 1000));
        $full_path = null;
        if ($tingkat == 1) {
            $filename = 'assets' . DIRECTORY_SEPARATOR . 'bkm' . DIRECTORY_SEPARATOR . $prov;
            if (!is_dir($filename)) {
                mkdir($filename, 0755, true);
            }
        } elseif ($tingkat == 2) {
            $filename = 'assets' . DIRECTORY_SEPARATOR . 'bkm' . DIRECTORY_SEPARATOR . $prov . DIRECTORY_SEPARATOR . $kab;
            if (!is_dir($filename)) {
                mkdir($filename, 0755, true);
            }
        } elseif ($tingkat == 3) {
            $filename = 'assets' . DIRECTORY_SEPARATOR . 'bkm' . DIRECTORY_SEPARATOR . $prov . DIRECTORY_SEPARATOR . $kab . DIRECTORY_SEPARATOR . $kec;
            if (!is_dir($filename)) {
                mkdir($filename, 0755, true);
            }
        } elseif ($tingkat == 4) {
            $filename = 'assets' . DIRECTORY_SEPARATOR . 'bkm' . DIRECTORY_SEPARATOR . $prov . DIRECTORY_SEPARATOR . $kab . DIRECTORY_SEPARATOR . $kec . DIRECTORY_SEPARATOR . $kel;
            if (!is_dir($filename)) {
                mkdir($filename, 0755, true);
            }
        } else {
            return false;
        }
        $param = [
            'upload_path' => $filename,
            'file_name' => $filename2,
            'input_name' => "bkmtxt",
        ];
        $upload = $this->_Upload($param);
        if ($upload['status']) {
            $result = $this->_save($param, $upload);
        } else {
            $err_upload = $this->upload->display_errors();
            $msg = null;
            if (isset($err_upload)) {
                $msg = 'ukuran file terlalu besar';
            } else {
                $msg = 'error saat menyimpan data';
            }
            $result = redirect(base_url('bkm-upload', $this->session->set_flashdata('err_msg', $msg)));
        }
        return $result;
    }

    private function _save($param, $upload) {
        $data = [
            'nama' => $this->input->post('namatxt'),
            'tingkat' => $this->input->post('tingkattxt') + false,
            'provinsi' => $this->input->post('provtxt') + false,
            'kabupaten' => $this->input->post('kabtxt') + false,
            'kecamatan' => $this->input->post('kectxt') + false,
            'kelurahan' => $this->input->post('keltxt') + false,
            'upload_sk' => $param['upload_path'] . DIRECTORY_SEPARATOR . $upload['file_name'],
            'status' => 1 + false,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $exec = $this->model->Save($data);
        if ($exec) {
            $msg = 'berhasil menyimpan data';
            $result = redirect(base_url('bkm-upload', $this->session->set_flashdata('suc_msg', $msg)));
        } else {
            $msg = 'kesalahan saat menyimpan data';
            $result = redirect(base_url('bkm-upload', $this->session->set_flashdata('err_msg', $msg)));
        }
        return $result;
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

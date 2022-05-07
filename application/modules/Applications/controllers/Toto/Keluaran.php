<?php

defined('BASEPATH') OR exit('404 not found');

class Keluaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_keluaran', 'model');
        $this->user = $this->bodo->Dec($this->session->userdata('id_user'));
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'hk_siang' => $this->hk_siang(),
            'sydney' => $this->sydney(),
            'haipong' => $this->haipong(),
            'singapore' => $this->singapore(),
            'singapore_45' => $this->singapore_45(),
            'malaysia' => $this->malaysia(),
            'jinan' => $this->jinan(),
            'qatar' => $this->qatar(),
            'bogor' => $this->bogor(),
            'hongkong' => $this->hongkong(),
            'pasaran' => $this->pasaran(),
            'item_active' => 'Applications/Toto/Keluaran/index/',
            'privilege' => $this->bodo->Check_previlege('Applications/Toto/Keluaran/index/'),
            'siteTitle' => 'Toto Keluaran | ' . $this->bodo->Sys('app_name'),
            'pagetitle' => 'Toto Keluaran',
            'breadcrumb' => [
                0 => [
                    'nama' => 'Dashboard',
                    'link' => null,
                    'status' => true
                ]
            ]
        ];
        $data['content'] = $this->parser->parse('keluaran/keluaran_index', $data, true);
        return $this->parser->parse('Template/layout', $data);
    }

    private function pasaran() {
        $exec = $this->model->m_pasaran();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<option value="' . Enkrip($value->id) . '">' . $value->nama . '</option>';
            }
        }
        return implode('', $result);
    }

    private function hk_siang() {
        $exec = $this->model->mHK_siang();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $id = Enkrip($value->id);
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    private function sydney() {
        $exec = $this->model->mSydney();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    private function haipong() {
        $exec = $this->model->mhaipong();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    private function singapore() {
        $exec = $this->model->msingapore();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    private function singapore_45() {
        $exec = $this->model->msingapore_45();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    private function malaysia() {
        $exec = $this->model->mmalaysia();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    private function jinan() {
        $exec = $this->model->mjinan();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    private function qatar() {
        $exec = $this->model->mqatar();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    private function bogor() {
        $exec = $this->model->mbogor();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    private function hongkong() {
        $exec = $this->model->mhongkong();
        $no = 0;
        if (count($exec) == 0) {
            $result[0] = '<tr>'
                    . '</tr>';
        } else {
            foreach ($exec as $value) {
                $no++;
                $result[$no] = '<tr>'
                        . '<td>' . $no . '</td>'
                        . '<td>' . $value->tgl_keluar . '</td>'
                        . '<td>' . $value->satu . ' ' . $value->dua . ' ' . $value->tiga . ' ' . $value->empat . '</td>'
                        . '</tr>';
            }
        }
        return implode('', $result);
    }

    public function Save() {
        $pasaran = Dekrip(Post_input('pasartxt'));
        $date = date_create(Post_input('tgltxt'));
        $tgl_keluar = date_format($date, 'Y-m-d');
        if (empty($pasaran)) {
            $result = redirect(base_url('Applications/Toto/Keluaran/index/'), $this->session->set_flashdata('err_msg', 'error code: 03052022, id pasaran invalid!'));
        } else {
            $data = [
                'satu' => Post_input('satutxt'),
                'dua' => Post_input('duatxt'),
                'tiga' => Post_input('tigatxt'),
                'empat' => Post_input('empattxt'),
                'pasaran' => $pasaran,
                'tgl_keluar' => $tgl_keluar
            ];
            $exec = $this->model->M_save($data);
            if ($exec) {
                $result = redirect(base_url('Applications/Toto/Keluaran/index/'), $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan data!'));
            } else {
                $result = redirect(base_url('Applications/Toto/Keluaran/index/'), $this->session->set_flashdata('err_msg', 'Gagal menambahkan data!'));
            }
        }
        return $result;
    }

    public function Save2() {
        $pasaran = Dekrip(Post_input('pasartxt'));
        $date = date_create(Post_input('tgltxt'));
        $tgl_keluar = date_format($date, 'Y-m-d');
        if (empty($pasaran)) {
            $result = redirect(base_url('Applications/Toto/Keluaran/Detail?pasar=' . Post_input('pasartxt')), $this->session->set_flashdata('err_msg', 'error code: 03052022, id pasaran invalid!'));
        } else {
            $data = [
                'satu' => Post_input('satutxt'),
                'dua' => Post_input('duatxt'),
                'tiga' => Post_input('tigatxt'),
                'empat' => Post_input('empattxt'),
                'pasaran' => $pasaran,
                'tgl_keluar' => $tgl_keluar
            ];
            $exec = $this->model->M_save($data);
            if ($exec) {
                $result = redirect(base_url('Applications/Toto/Keluaran/Detail?pasar=' . Post_input('pasartxt')), $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan data!'));
            } else {
                $result = redirect(base_url('Applications/Toto/Keluaran/Detail?pasar=' . Post_input('pasartxt')), $this->session->set_flashdata('err_msg', 'Gagal menambahkan data!'));
            }
        }
        return $result;
    }

    private function jitu($id_pasar) {
        $exec = $this->model->m_jitu($id_pasar);
        $data = [];

        $pos_1 = null;
        $pos_2 = null;
        $pos_3 = null;
        $pos_4 = null;

        $satu = 0;
        $dua = 0;
        $tiga = 0;
        $empat = 0;
        $lima = 0;
        $enam = 0;
        $tujuh = 0;
        $delapan = 0;
        $sembilan = 0;
        $nol = 0;

        $as_1 = 0;
        $as_2 = 0;
        $as_3 = 0;
        $as_4 = 0;
        $as_5 = 0;
        $as_6 = 0;
        $as_7 = 0;
        $as_8 = 0;
        $as_9 = 0;
        $as_0 = 0;

        $kop_1 = 0;
        $kop_2 = 0;
        $kop_3 = 0;
        $kop_4 = 0;
        $kop_5 = 0;
        $kop_6 = 0;
        $kop_7 = 0;
        $kop_8 = 0;
        $kop_9 = 0;
        $kop_0 = 0;

        $kepala_1 = 0;
        $kepala_2 = 0;
        $kepala_3 = 0;
        $kepala_4 = 0;
        $kepala_5 = 0;
        $kepala_6 = 0;
        $kepala_7 = 0;
        $kepala_8 = 0;
        $kepala_9 = 0;
        $kepala_0 = 0;

        $ekor_1 = 0;
        $ekor_2 = 0;
        $ekor_3 = 0;
        $ekor_4 = 0;
        $ekor_5 = 0;
        $ekor_6 = 0;
        $ekor_7 = 0;
        $ekor_8 = 0;
        $ekor_9 = 0;
        $ekor_0 = 0;

        foreach ($exec as $value) {
            switch ($value->satu) {
                case 1:
                    $satu += 1;
                    $as_1 += 1;
                    $pos_1 .= 1 . ',';
                    break;
                case 2:
                    $dua += 1;
                    $as_2 += 1;
                    $pos_1 .= 2 . ',';
                    break;
                case 3:
                    $tiga += 1;
                    $as_3 += 1;
                    $pos_1 .= 3 . ',';
                    break;
                case 4:
                    $empat += 1;
                    $as_4 += 1;
                    $pos_1 .= 4 . ',';
                    break;
                case 5:
                    $lima += 1;
                    $as_5 += 1;
                    $pos_1 .= 5 . ',';
                    break;
                case 6:
                    $enam += 1;
                    $as_6 += 1;
                    $pos_1 .= 6 . ',';
                    break;
                case 7:
                    $tujuh += 1;
                    $as_7 += 1;
                    $pos_1 .= 7 . ',';
                    break;
                case 8:
                    $delapan += 1;
                    $as_8 += 1;
                    $pos_1 .= 8 . ',';
                    break;
                case 9:
                    $sembilan += 1;
                    $as_9 += 1;
                    $pos_1 .= 9 . ',';
                    break;
                default :
                    $nol += 1;
                    $as_0 += 1;
                    $pos_1 .= 0 . ',';
                    break;
            }
            switch ($value->dua) {
                case 1:
                    $satu += 1;
                    $kop_1 += 1;
                    $pos_2 .= 1 . ',';
                    break;
                case 2:
                    $dua += 1;
                    $kop_2 += 1;
                    $pos_2 .= 2 . ',';
                    break;
                case 3:
                    $tiga += 1;
                    $kop_3 += 1;
                    $pos_2 .= 3 . ',';
                    break;
                case 4:
                    $empat += 1;
                    $kop_4 += 1;
                    $pos_2 .= 4 . ',';
                    break;
                case 5:
                    $lima += 1;
                    $kop_5 += 1;
                    $pos_2 .= 5 . ',';
                    break;
                case 6:
                    $enam += 1;
                    $kop_6 += 1;
                    $pos_2 .= 6 . ',';
                    break;
                case 7:
                    $tujuh += 1;
                    $kop_7 += 1;
                    $pos_2 .= 7 . ',';
                    break;
                case 8:
                    $delapan += 1;
                    $kop_8 += 1;
                    $pos_2 .= 8 . ',';
                    break;
                case 9:
                    $sembilan += 1;
                    $kop_9 += 1;
                    $pos_2 .= 9 . ',';
                    break;
                default :
                    $nol += 1;
                    $kop_0 += 1;
                    $pos_2 .= 0 . ',';
                    break;
            }
            switch ($value->tiga) {
                case 1:
                    $satu += 1;
                    $kepala_1 += 1;
                    $pos_3 .= 1 . ',';
                    break;
                case 2:
                    $dua += 1;
                    $kepala_2 += 1;
                    $pos_3 .= 2 . ',';
                    break;
                case 3:
                    $tiga += 1;
                    $kepala_3 += 1;
                    $pos_3 .= 3 . ',';
                    break;
                case 4:
                    $empat += 1;
                    $kepala_4 += 1;
                    $pos_3 .= 4 . ',';
                    break;
                case 5:
                    $lima += 1;
                    $kepala_5 += 1;
                    $pos_3 .= 5 . ',';
                    break;
                case 6:
                    $enam += 1;
                    $kepala_6 += 1;
                    $pos_3 .= 6 . ',';
                    break;
                case 7:
                    $tujuh += 1;
                    $kepala_7 += 1;
                    $pos_3 .= 7 . ',';
                    break;
                case 8:
                    $delapan += 1;
                    $kepala_8 += 1;
                    $pos_3 .= 8 . ',';
                    break;
                case 9:
                    $sembilan += 1;
                    $kepala_9 += 1;
                    $pos_3 .= 9 . ',';
                    break;
                default :
                    $nol += 1;
                    $kepala_0 += 1;
                    $pos_3 .= 0 . ',';
                    break;
            }
            switch ($value->empat) {
                case 1:
                    $satu += 1;
                    $ekor_1 += 1;
                    $pos_4 .= 1 . ',';
                    break;
                case 2:
                    $dua += 1;
                    $ekor_2 += 1;
                    $pos_4 .= 2 . ',';
                    break;
                case 3:
                    $tiga += 1;
                    $ekor_3 += 1;
                    $pos_4 .= 3 . ',';
                    break;
                case 4:
                    $empat += 1;
                    $ekor_4 += 1;
                    $pos_4 .= 4 . ',';
                    break;
                case 5:
                    $lima += 1;
                    $ekor_5 += 1;
                    $pos_4 .= 5 . ',';
                    break;
                case 6:
                    $enam += 1;
                    $ekor_6 += 1;
                    $pos_4 .= 6 . ',';
                    break;
                case 7:
                    $tujuh += 1;
                    $ekor_7 += 1;
                    $pos_4 .= 7 . ',';
                    break;
                case 8:
                    $delapan += 1;
                    $ekor_8 += 1;
                    $pos_4 .= 8 . ',';
                    break;
                case 9:
                    $sembilan += 1;
                    $ekor_9 += 1;
                    $pos_4 .= 9 . ',';
                    break;
                default :
                    $nol += 1;
                    $ekor_0 += 1;
                    $pos_4 .= 0 . ',';
                    break;
            }
        }
        $data['exec'] = $exec;
        $data['angka'] = [
            'satu' => $satu,
            'dua' => $dua,
            'tiga' => $tiga,
            'empat' => $empat,
            'lima' => $lima,
            'enam' => $enam,
            'tujuh' => $tujuh,
            'delapan' => $delapan,
            'sembilan' => $sembilan,
            'nol' => $nol
        ];
        $data['as'] = [
            'as_1' => $as_1,
            'as_2' => $as_2,
            'as_3' => $as_3,
            'as_4' => $as_4,
            'as_5' => $as_5,
            'as_6' => $as_6,
            'as_7' => $as_7,
            'as_8' => $as_8,
            'as_9' => $as_9,
            'as_0' => $as_0
        ];
        $data['kop'] = [
            'kop_1' => $kop_1,
            'kop_2' => $kop_2,
            'kop_3' => $kop_3,
            'kop_4' => $kop_4,
            'kop_5' => $kop_5,
            'kop_6' => $kop_6,
            'kop_7' => $kop_7,
            'kop_8' => $kop_8,
            'kop_9' => $kop_9,
            'kop_0' => $kop_0
        ];
        $data['kepala'] = [
            'kepala_1' => $kepala_1,
            'kepala_2' => $kepala_2,
            'kepala_3' => $kepala_3,
            'kepala_4' => $kepala_4,
            'kepala_5' => $kepala_5,
            'kepala_6' => $kepala_6,
            'kepala_7' => $kepala_7,
            'kepala_8' => $kepala_8,
            'kepala_9' => $kepala_9,
            'kepala_0' => $kepala_0
        ];
        $data['ekor'] = [
            'ekor_1' => $ekor_1,
            'ekor_2' => $ekor_2,
            'ekor_3' => $ekor_3,
            'ekor_4' => $ekor_4,
            'ekor_5' => $ekor_5,
            'ekor_6' => $ekor_6,
            'ekor_7' => $ekor_7,
            'ekor_8' => $ekor_8,
            'ekor_9' => $ekor_9,
            'ekor_0' => $ekor_0
        ];
//        log_message('error', substr($pos_1, 0, -1));
        $new_pos_1 = array_values(array_diff(range(0, 9), explode(',', substr($pos_1, 0, -1))));
        $new_pos_2 = array_values(array_diff(range(0, 9), explode(',', substr($pos_2, 0, -1))));
        $new_pos_3 = array_values(array_diff(range(0, 9), explode(',', substr($pos_3, 0, -1))));
        $new_pos_4 = array_values(array_diff(range(0, 9), explode(',', substr($pos_4, 0, -1))));
        $data['posisi'] = [
            'as' => $new_pos_1,
            'kop' => $new_pos_2,
            'kepala' => $new_pos_3,
            'ekor' => $new_pos_4
        ];
        return $data;
    }

    public function Detail() {
        $id_pasar = Dekrip(Post_get('pasar'));
        if (empty($id_pasar)) {
            redirect(base_url('Applications/Toto/Keluaran/index/'), $this->session->set_flashdata('succ_msg', 'Berhasil menambahkan data!'));
        } else {
            $data = [
                'csrf' => $this->bodo->Csrf(),
                'data' => $this->jitu($id_pasar),
                'id_toto' => $this->model->get_toto($id_pasar),
                'item_active' => 'Applications/Toto/Keluaran/index/',
                'privilege' => $this->bodo->Check_previlege('Applications/Toto/Keluaran/index/'),
                'siteTitle' => 'Detail Hasil | ' . $this->bodo->Sys('app_name'),
                'pagetitle' => 'Detail Hasil',
                'breadcrumb' => [
                    0 => [
                        'nama' => 'Dashboard',
                        'link' => base_url('Applications/Toto/Keluaran/index/'),
                        'status' => false
                    ],
                    1 => [
                        'nama' => 'Detail',
                        'link' => null,
                        'status' => true
                    ]
                ]
            ];
            $data['content'] = $this->parser->parse('keluaran/keluaran_detail', $data, true);
            return $this->parser->parse('Template/layout', $data);
        }
    }

    public function Save_1() {
        $id = Dekrip(Post_input('idtxt'));
        $pasaran = Dekrip(Post_input('pasartxt2'));
        if (empty($id)) {
            $result = redirect(base_url('Applications/Toto/Keluaran/Detail?pasar=' . Post_input('pasartxt')), $this->session->set_flashdata('err_msg', 'error, invalid token!'));
        } else {
            $data = [
                'id' => $id,
                'noted' => Post_input('asutxt'),
                'pasar_id' => $pasaran
            ];
            $exec = $this->model->m_save1($data);
            if ($exec) {
                $result = redirect(base_url('Applications/Toto/Keluaran/Detail?pasar=' . Post_input('pasartxt')), $this->session->set_flashdata('succ_msg', 'success, berhasil menambahkan catatan!'));
            } else {
                $result = redirect(base_url('Applications/Toto/Keluaran/Detail?pasar=' . Post_input('pasartxt')), $this->session->set_flashdata('err_msg', 'error, gagal menambahkan catatan!'));
            }
        }
        return $result;
    }

}

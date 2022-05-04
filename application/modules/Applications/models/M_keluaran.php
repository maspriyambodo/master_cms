<?php

defined('BASEPATH') OR exit('404 not found');

class M_keluaran extends CI_Model {

    public function mHK_siang() {
        $exec = $this->db->select('dt_toto.id,dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 1, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function mSydney() {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 2, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function mhaipong() {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 3, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function msingapore() {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 4, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 20 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function msingapore_45() {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 5, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 35 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function mmalaysia() {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 6, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function mjinan() {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 7, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function mqatar() {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 8, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function mbogor() {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 9, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function mhongkong() {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('dt_toto.pasaran', 10, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function m_pasaran() {
        $exec = $this->db->select('mt_toto_pasar.id,mt_toto_pasar.nama')
                ->from('mt_toto_pasar')
                ->where('mt_toto_pasar.stat', 1, false)
                ->get()
                ->result();
        return $exec;
    }

    public function M_save($data) {
        $this->db->trans_begin();
        $this->db->set([
                    '`dt_toto`.`satu`' => $data['satu'] + false,
                    '`dt_toto`.`dua`' => $data['dua'] + false,
                    '`dt_toto`.`tiga`' => $data['tiga'] + false,
                    '`dt_toto`.`empat`' => $data['empat'] + false,
                    '`dt_toto`.`pasaran`' => $data['pasaran'] + false,
                    '`dt_toto`.`tgl_keluar`' => $data['tgl_keluar']
                ])
                ->insert('dt_toto');
        if (!$this->db->trans_status()) {
            $this->db->trans_rollback();
            $result = false;
        } else {
            $this->db->trans_commit();
            $result = true;
        }
        return $result;
    }

    public function m_jitu($id_pasar) {
        $exec = $this->db->select('dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.tgl_keluar,dt_toto.noted,mt_toto_pasar.nama AS nama_pasar')
                ->from('dt_toto')
                ->join('mt_toto_pasar', 'dt_toto.pasaran = mt_toto_pasar.id')
                ->where('`dt_toto`.`pasaran`', $id_pasar, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function get_toto($id_pasar) {
        $exec = $this->db->select('dt_toto.id')
                ->from('dt_toto')
                ->where('`dt_toto`.`pasaran`', $id_pasar, false)
                ->where('( dt_toto.tgl_keluar BETWEEN CURDATE( ) - INTERVAL 10 DAY AND CURDATE( ) )', null, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(1)
                ->get()
                ->result();
        return $exec;
    }

    public function m_save1($data) {
        $this->db->trans_begin();
        $this->db->set('`dt_toto`.`noted`', $data['noted'])
                ->where('`dt_toto`.`id`', $data['id'], false)
                ->update('dt_toto');
        if (!$this->db->trans_status()) {
            $this->db->trans_rollback();
            $result = false;
        } else {
            $this->db->trans_commit();
            $result = true;
        }
        return $result;
    }

}

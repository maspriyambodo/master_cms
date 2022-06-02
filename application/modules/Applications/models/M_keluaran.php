<?php

defined('BASEPATH') OR exit('404 not found');

class M_keluaran extends CI_Model {

    public function m_pasaran() {
        $exec = $this->db->select('mt_toto_pasar.id,mt_toto_pasar.nama,mt_toto_pasar.tipe,mt_toto_pasar.nama_web,mt_toto_pasar.hari_undi,mt_toto_pasar.hari_libur,mt_toto_pasar.jam_tutup,mt_toto_pasar.jam_undi')
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
                    '`dt_toto`.`lima`' => $data['lima'] + false,
                    '`dt_toto`.`enam`' => $data['enam'] + false,
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
        $exec = $this->db->select('dt_toto.id,dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.lima AS limad,dt_toto.enam AS enamd,dt_toto.tgl_keluar,dt_toto.noted,mt_toto_pasar.nama AS nama_pasar')
                ->from('dt_toto')
                ->join('mt_toto_pasar', 'dt_toto.pasaran = mt_toto_pasar.id')
                ->where('`dt_toto`.`pasaran`', $id_pasar, false)
                ->order_by('dt_toto.tgl_keluar', 'DESC')
                ->limit(20)
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
        $this->db->set('`dt_toto`.`noted`', null)
                ->where('`dt_toto`.`pasaran`', $data['pasar_id'], false)
                ->update('dt_toto');
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

    public function M_inpo($id_pasar) {
        $exec = $this->db->select('hari_undi,hari_libur,jam_tutup,jam_undi,tipe,nama_web')
                ->from('mt_toto_pasar')
                ->where('`mt_toto_pasar`.`id`', $id_pasar, false)
                ->limit(1)
                ->get()
                ->result();
        return $exec;
    }

    public function mget($id) {
        $exec = $this->db->select('dt_toto.id,dt_toto.satu,dt_toto.dua,dt_toto.tiga,dt_toto.empat,dt_toto.lima,dt_toto.enam,dt_toto.pasaran,dt_toto.tgl_keluar')
                ->from('dt_toto')
                ->where('`dt_toto`.`id`', $id, false)
                ->get()
                ->result();
        return $exec;
    }

    public function mUpdate($data, $id) {
        $this->db->trans_begin();
        $this->db->set([
                    '`dt_toto`.`satu`' => $data['satu'] + false,
                    '`dt_toto`.`dua`' => $data['dua'] + false,
                    '`dt_toto`.`tiga`' => $data['tiga'] + false,
                    '`dt_toto`.`empat`' => $data['empat'] + false,
                    '`dt_toto`.`lima`' => $data['lima'] + false,
                    '`dt_toto`.`enam`' => $data['enam'] + false,
                    '`dt_toto`.`tgl_keluar`' => $data['tgl_keluar']
                ])
                ->where('`dt_toto`.`id`', $id, false)
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

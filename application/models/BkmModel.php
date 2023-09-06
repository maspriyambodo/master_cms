<?php

defined('BASEPATH') OR exit('doh!');

class BkmModel extends CI_Model {

    public function Save($data) {
        $this->db->trans_begin();
        $this->db->insert('dt_bkm', $data);
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            $result = false;
        } else {
            $this->db->trans_commit();
            $result = true;
        }
        return $result;
    }

    public function Prov() {
        $exec = $this->db->select('id_provinsi,nama')
                ->from('mt_wil_provinsi')
                ->where('is_actived', 1, false)
                ->get()
                ->result();
        return $exec;
    }

    public function Getkab($id) {
        $exec = $this->db->select('`mt_wil_kabupaten`.`id_kabupaten`, `mt_wil_kabupaten`.`id_provinsi`, `mt_wil_kabupaten`.`nama` AS `kabupaten`')
                ->from('`mt_wil_kabupaten`')
                ->where([
                    '`mt_wil_kabupaten`.`is_actived`' => 1 + false,
                    '`mt_wil_kabupaten`.`id_provinsi`' => $id
                ])
                ->get()
                ->result();
        $a[0] = ['kabupaten' => 'Pilih Kabupaten'];
        $a[1] = ['kabupaten' => 'Lainnya'];
        $b = array_merge($a, $exec);
        return $b;
    }

    public function Getkec($id) {
        $exec = $this->db->select('`mt_wil_kecamatan`.`id_kecamatan`, `mt_wil_kecamatan`.`nama` AS `kecamatan`')
                ->from('`mt_wil_kecamatan`')
                ->where([
                    '`mt_wil_kecamatan`.`is_actived`' => 1 + false,
                    '`mt_wil_kecamatan`.`id_kabupaten`' => $id + false
                ])
                ->get()
                ->result();
        $a[0] = ['kecamatan' => 'Pilih Kecamatan'];
        $a[1] = ['kecamatan' => 'Lainnya'];
        $b = array_merge($a, $exec);
        return $b;
    }

    public function Getkel($id) {
        $exec = $this->db->select('`mt_wil_kelurahan`.`id_kelurahan`, `mt_wil_kelurahan`.`nama` AS `kelurahan`')
                ->from('`mt_wil_kelurahan`')
                ->where([
                    '`mt_wil_kelurahan`.`is_actived`' => 1 + false,
                    '`mt_wil_kelurahan`.`id_kecamatan`' => $id + false
                ])
                ->get()
                ->result();
        $a[0] = ['kelurahan' => 'Pilih Kelurahan'];
        $a[1] = ['kelurahan' => 'Lainnya'];
        $b = array_merge($a, $exec);
        return $b;
    }
}

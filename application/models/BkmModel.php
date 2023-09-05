<?php

defined('BASEPATH') OR exit('doh!');

class BkmModel extends CI_Model {

    public function Upload($data) {
        
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
        $a[0] = array('kabupaten' => 'Pilih Kabupaten');
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
        $a[0] = array('kecamatan' => 'Pilih Kecamatan');
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
        $a[0] = array('kelurahan' => 'Pilih Kelurahan');
        $b = array_merge($a, $exec);
        return $b;
    }
}

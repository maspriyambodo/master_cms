<?php

defined('BASEPATH') OR exit('404 not found');

class M_finance extends CI_Model {

    public function m_uang_masuk() {
        $exec = $this->db->select('dt_finance.id,dt_finance.jenis,dt_finance.tgl,dt_finance.nominal,dt_finance.stat,dt_finance.keterangan')
                ->from('dt_finance')
                ->where('MONTH ( dt_finance.tgl ) =', 'MONTH ( NOW( ) - INTERVAL 1 MONTH )', false)
                ->where('YEAR ( dt_finance.tgl ) =', 'YEAR ( NOW( ) )', false)
                ->order_by('dt_finance.tgl', 'ASC')
                ->get()
                ->result();
        return $exec;
    }

    public function m_save($data) {
        $this->db->trans_begin();
        $this->db->insert('dt_finance', $data);
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

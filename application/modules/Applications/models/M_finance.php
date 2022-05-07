<?php

defined('BASEPATH') OR exit('404 not found');

class M_finance extends CI_Model {

    public function m_mutasi($bulan = "MONTH ( NOW( ) )") {
        $exec = $this->db->select('dt_finance.id,dt_finance.jenis,dt_finance.tgl,dt_finance.nominal,dt_finance.stat,dt_finance.keterangan')
                ->from('dt_finance')
                ->where('MONTH ( dt_finance.tgl ) =', $bulan, false)
                ->where('YEAR ( dt_finance.tgl ) =', 'YEAR ( NOW( ) )', false)
                ->where('`dt_finance`.`stat`', 1, false)
                ->order_by('DAY ( `dt_finance`.`tgl` )', 'ASC')
                ->get()
                ->result();
        return $exec;
    }

    public function m_bulan($bulan = null) {
        if (empty($bulan)) {
            $exec = $this->db->select('MIN( dt_finance.tgl ) AS tgl')
                    ->from('dt_finance')
                    ->where('`dt_finance`.`stat`', 1, false)
                    ->where('MONTH ( dt_finance.tgl ) <>', date('m'), false)
                    ->group_by('MONTH(dt_finance.tgl)')
                    ->order_by('dt_finance.tgl', 'ASC')
                    ->get()
                    ->result();
        } else {
            $exec = $this->db->select('MIN( dt_finance.tgl ) AS tgl,MONTH(dt_finance.tgl) AS bulan')
                    ->from('dt_finance')
                    ->where('`dt_finance`.`stat`', 1, false)
                    ->where('MONTH ( dt_finance.tgl ) <>', $bulan, false)
                    ->group_by('MONTH(dt_finance.tgl)')
                    ->order_by('dt_finance.tgl', 'ASC')
                    ->get()
                    ->result();
        }

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

    public function mGetData($id) {
        $exec = $this->db->select('dt_finance.id,dt_finance.jenis,dt_finance.tgl,dt_finance.nominal,dt_finance.stat,dt_finance.keterangan')
                ->from('dt_finance')
                ->where('`dt_finance`.`id`', $id, false)
                ->get()
                ->result();
        return $exec;
    }

}

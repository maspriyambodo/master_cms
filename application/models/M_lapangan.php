<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapangan extends CI_Model {

    public function Get_lapangan() {
        if (Post_get('q')) {
            $exec = $this->db->select('id, nama, alamat,')
                    ->from('dt_lapangan')
                    ->like('dt_lapangan.nama', Post_get('term'))
                    ->or_like('dt_lapangan.alamat', Post_get('term'))
                    ->get()
                    ->result();
            log_message('error', $this->db->last_query());
        } else {
            $exec = [];
        }
        return $exec;
    }

}

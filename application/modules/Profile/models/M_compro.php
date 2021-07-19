<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Product:        System of AU+ PRODUCTION
 * License Type:   Company
 * Access Type:    Multi-User
 * License:        https://maspriyambodo.com
 * maspriyambodo@gmail.com
 * 
 * Thank you,
 * maspriyambodo
 */

/**
 * Description of M_compro
 *
 * @author centos
 */
class M_compro extends CI_Model {

    public function Portfolio($paginate) {
        $exec = $this->db->select('id,lowres,highres,tipe,title,desc')
                ->from('dt_portfolio')
                ->where('`dt_portfolio`.`stat`', 1, false)
                ->limit($paginate['config']['per_page'], $paginate['from'])
                ->get()
                ->result();
        return $exec;
    }

    public function Totprotfolio() {
        $exec = $this->db->select()
                ->from('dt_portfolio')
                ->where('`dt_portfolio`.`stat`', 1, false)
                ->get()
                ->num_rows();
        return $exec;
    }

    public function List_services() {
        $exec = $this->db->select('id,nama,desc')
                ->from('dt_services')
                ->where('`stat`', 1, false)
                ->get()
                ->result();
        return $exec;
    }

}

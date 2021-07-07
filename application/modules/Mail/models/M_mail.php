<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_mail extends CI_Model {

    public function index() {
        $exec = $this->db->select()
                ->from()
                ->where()
                ->get()
                ->result();
        return $exec;
    }

}

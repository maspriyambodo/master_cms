<?php

defined('BASEPATH') OR exit('trying to signin from backdoor?');

class M_param extends CI_Model {

    public function index() {
        $exec = $this->db->select('sys_param.id,sys_param.param_group,sys_param.param_value,sys_param.param_desc,sys_param.stat')
                ->from('sys_param')
                ->where('`sys_param`.`stat`', 1, false)
                ->get()
                ->result();
        return $exec;
    }

}

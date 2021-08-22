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
 * Description of Profile
 *
 * @author centos
 */
class M_Services extends CI_Model {

    public function index() {
        $exec = $this->db->select('id,nama,desc,stat')
                ->from('dt_services')
                ->get()
                ->result();
        return $exec;
    }

    public function Add($data) {
        $this->db->trans_begin();
        $this->db->insert('dt_services', $data);
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            $result = redirect(base_url('Compro/Services/List/'), $this->session->set_flashdata('err_msg', 'failed, error while adding data'));
        } else {
            $this->db->trans_commit();
            $result = redirect(base_url('Compro/Services/List/'), $this->session->set_flashdata('succ_msg', 'success, services lists has been added'));
        }
        return $result;
    }

    public function Delete($data, $id) {
        $this->db->trans_begin();
        $this->db->set($data)
                ->where('`dt_services`.`id`', $id, false)
                ->update('dt_services');
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            $result = redirect(base_url('Compro/Services/List/'), $this->session->set_flashdata('err_msg', 'failed, error while deleting data'));
        } else {
            $this->db->trans_commit();
            $result = redirect(base_url('Compro/Services/List/'), $this->session->set_flashdata('succ_msg', 'success, services lists has been deleted'));
        }
        return $result;
    }

    public function Get_detail($id) {
        $exec = $this->db->select('nama,desc')
                ->from('dt_services')
                ->where('`dt_services`.`id`', $id, false)
                ->get()
                ->row();
        return $exec;
    }

    public function Update($data, $id) {
        $this->db->trans_begin();
        $this->db->set($data)
                ->where('`dt_services`.`id`', $id, false)
                ->update('dt_services');
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            $result = redirect(base_url('Compro/Services/List/'), $this->session->set_flashdata('err_msg', 'failed, error while updating data'));
        } else {
            $this->db->trans_commit();
            $result = redirect(base_url('Compro/Services/List/'), $this->session->set_flashdata('succ_msg', 'success, services lists has been updated'));
        }
        return $result;
    }

    public function Activate($data, $id) {
        $this->db->trans_begin();
        $this->db->set($data)
                ->where('`dt_services`.`id`', $id, false)
                ->update('dt_services');
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            $result = redirect(base_url('Compro/Services/List/'), $this->session->set_flashdata('err_msg', 'failed, error while activating data'));
        } else {
            $this->db->trans_commit();
            $result = redirect(base_url('Compro/Services/List/'), $this->session->set_flashdata('succ_msg', 'success, services lists has been activated'));
        }
        return $result;
    }

}

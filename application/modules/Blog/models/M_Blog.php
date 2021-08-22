<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Blog extends CI_Model {

    public function index($paginate) {
        $exec = $this->db->select('SUBSTRING(`dt_post`.`post_content`, 1, 350) AS post_content,`dt_post`.`post_title`,dt_post_category.category,dt_users.nama,dt_post.syscreatedate,dt_post.post_thumbnail')
                ->from('dt_post')
                ->join('dt_users', 'dt_post.syscreateuser = dt_users.sys_user_id', 'INNER')
                ->join('dt_post_category', 'dt_post.post_category = dt_post_category.id', 'INNER')
                ->where('`dt_post`.`post_status`', 1, false)
                ->limit($paginate['config']['per_page'], $paginate['from'])
                ->get()
                ->result();
        return $exec;
    }

    public function Totpost() {
        $exec = $this->db->select('dt_post.id')
                ->from('dt_post')
                ->where('`dt_post`.`post_status`', 1, false)
                ->get()
                ->num_rows();
        return $exec;
    }

    public function Category() {//untuk asside page blog
        $exec = $this->db->select('dt_post_category.category')
                ->from('dt_post_category')
                ->where('`dt_post_category`.`stat`', 1, false)
                ->get()
                ->result();
        return $exec;
    }

    public function Read($title) {
        $exec = $this->db->select('dt_post.id, `dt_post`.`post_content`,`dt_post`.`post_title`,dt_post_category.category,dt_users.nama,dt_post.syscreatedate,dt_post.post_thumbnail')
                ->from('dt_post')
                ->join('dt_users', 'dt_post.syscreateuser = dt_users.sys_user_id', 'INNER')
                ->join('dt_post_category', 'dt_post.post_category = dt_post_category.id', 'INNER')
                ->where('`dt_post`.`post_status`', 1, false)
                ->where('dt_post.post_title', $title)
                ->limit(1)
                ->get()
                ->row_array();
        if (!empty($exec)) {
            $result = $this->viewers($exec);
        } else {
            $result = redirect('Blog/index/', 'refresh');
        }
        return $result;
    }

    private function viewers($param) {
        $this->db->trans_begin();
        $this->db->set('`dt_post`.`viewers`', '`dt_post`.`viewers` + 1', false)
                ->where('`dt_post`.`id`', $param['id'], false)
                ->update('dt_post');
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            $result = redirect('Blog/index/', 'refresh');
        } else {
            $this->db->trans_commit();
            $result = $param;
        }
        return $result;
    }

    public function Popular() {
        $exec = $this->db->select('`dt_post`.`post_title`, DATE_FORMAT(dt_post.syscreatedate ,"%e %M %Y") AS syscreatedate')
                ->from('dt_post')
                ->where('`dt_post`.`post_status`', 1, false)
                ->order_by('dt_post.viewers', 'DESC')
                ->limit(5)
                ->get()
                ->result();
        return $exec;
    }

    public function Recent_post() {
        $exec = $this->db->select('`dt_post`.`post_title`, DATE_FORMAT(dt_post.syscreatedate ,"%e %M %Y") AS syscreatedate')
                ->from('dt_post')
                ->where('`dt_post`.`post_status`', 1, false)
                ->order_by('`dt_post`.`syscreatedate`', 'ASC')
                ->limit(5)
                ->get()
                ->result();
        return $exec;
    }

    public function Related_post($post_title) {
        $post_category = $this->db->select('`dt_post`.`post_category`,`dt_post`.`id`')
                ->from('dt_post')
                ->where('`dt_post`.`post_title`', $post_title)
                ->get()
                ->row_array();
        $exec = $this->db->select('dt_post.post_title, dt_post.post_thumbnail')
                ->from('dt_post')
                ->where('`dt_post`.`post_status`', 1, false)
                ->where('`dt_post`.`post_category`', $post_category['post_category'])
                ->where('`dt_post`.`id` !=', $post_category['id'])
                ->limit(10)
                ->get()
                ->result();
        return $exec;
    }

    public function Popular_tags() {
        $exec = $this->db->select('DISTINCT `dt_post`.`post_tags`', false)
                ->from('dt_post')
                ->where('`dt_post`.`post_status`', 1, false)
                ->order_by('dt_post.viewers', 'DESC')
                ->get()
                ->result();
        return $exec;
    }

}

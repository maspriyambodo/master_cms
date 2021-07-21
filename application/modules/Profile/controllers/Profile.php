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
class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_compro', 'model');
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'list_services' => $this->model->List_services(),
            'siteTitle' => $this->bodo->Sys('company_name'),
            'description' => 'AU+ Production'
        ];
        $data['content'] = $this->parser->parse('index', $data, true);
        return $this->parser->parse('layout', $data);
    }

    public function Gallery() {
        $paginate = $this->Paginate();
        $data = [
            'siteTitle' => 'Gallery | ' . $this->bodo->Sys('company_name'),
            'description' => 'AU+ Production',
            'portfolio' => $this->model->Portfolio($paginate)
        ];
        $data['content'] = $this->parser->parse('gallery', $data, true);
        return $this->parser->parse('layout', $data);
    }

    private function Paginate() {
        $this->load->library('pagination');
        $tot = $this->model->Totprotfolio();
        $config['base_url'] = base_url('Profile/Gallery');
        $config['total_rows'] = $tot;
        $config['per_page'] = 6;
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm justify-content-center" style="-webkit-box-shadow:none;">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="javascript:void(0);" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $from = $this->uri->segment(3);
        $data = [
            'config' => $config,
            'from' => $from
        ];
        $this->pagination->initialize($config);
        return $data;
    }

    public function Newsletter() {
        $this->load->library('user_agent');
        $data = [
            'mail' => Post_input('emailtxt'),
            'nama' => Post_input('nametxt'),
            'platform' => $this->agent->platform()
        ];
        $this->model->Newsletter($data);
    }

}

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
            'siteTitle' => $this->bodo->Sys('company_name'),
            'description' => 'AU+ Production'
        ];
        $data['content'] = $this->parser->parse('index', $data, true);
        return $this->parser->parse('layout', $data);
    }

}

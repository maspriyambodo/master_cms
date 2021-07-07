<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Polo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_lapangan');
    }

    public function index() {
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'description'
        ];
        $data['content'] = $this->parser->parse('compro/index', $data, true);
        return $this->parser->parse('compro/layout', $data);
    }

    public function Search() {
        $search = [
            'nama' => Post_input('loctxt'),
            'tgl' => Post_input('tgltxt'),
            'jam' => Post_input('timetxt')
        ];
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'description'
        ];
        $data['content'] = $this->parser->parse('compro/search', $data, true);
        return $this->parser->parse('compro/layout', $data);
    }

    public function Get_lapangan() {
        $exec = $this->M_lapangan->Get_lapangan();
        if ($exec) {
            $response = [
                'stat' => true,
                'results' => $exec
            ];
        } else {
            $response = [
                'stat' => false
            ];
        }
        ToJson($exec);
    }

    public function Puser() {
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
                '4587e4cb86b14bb98e69',
                '9c0c9ad504eeb5598286',
                '1030899',
                $options
        );

        $data['message'] = 'hello world';
        $pusher->trigger('my-channel', 'my-event', $data);
    }

}

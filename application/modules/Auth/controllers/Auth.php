<?php

defined('BASEPATH') OR exit('No direct script access allowed, are you trying to signin backdoor?');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_auth');
    }

    private function Check_session() {
        if ($this->session->userdata('id_user') and $this->session->userdata('uname') and $this->session->userdata('stat_aktif') and $this->session->userdata('role_id')) {
            $result = redirect(base_url('Dashboard'), 'refresh');
        } elseif ($this->session->tempdata('auth_sekuriti')) {
            $result = auth_sekuriti();
        } elseif ($this->session->tempdata('blocked_account')) {
            $result = blocked_account();
        } else {
            $result = true;
        }
        return $result;
    }

    public function index() {
        $this->Check_session();
        $data = [
            'csrf' => $this->bodo->Csrf(),
            'siteTitle' => 'Signin System | ' . $this->bodo->Sys('app_name'),
        ];
        $this->parser->parse('v_auth', $data);
    }

    public function Signin() {
        $data = [
            'uname' => Post_input("username"),
            'pwd' => Post_input("password")
        ];
        $exec = $this->M_auth->Signin($data);
        if (!empty($exec) and ($exec->limit_login == 0 or $exec->limit_login != 3)) {
            $hashed = $exec->pwd;
            if (password_verify($data['pwd'], $hashed)) {
                $this->bodo->Set_session($exec);
                $this->M_auth->Remove_penalty($data);
//                $result = redirect(base_url('Dashboard'), 'refresh');
                $results = [
                    'stat' => true,
                    'href' => 'Dashboard'
                ];
            } else {
                $this->Attempt(1);
//                $result = redirect(base_url('Signin'), $this->session->set_flashdata('err_msg', 'Sorry, your password was incorrect. Please double-check your password.'));
                $results = [
                    'stat' => false,
                    'msgtxt' => 'Sorry, your password was incorrect. Please double-check your password.',
                    'csrf' => $this->bodo->Csrf()['hash'],
                    'login_attemp' => $this->session->userdata('attempt')
                ];
            }
        } elseif (!empty($exec) and $exec->limit_login == 3) {
            $results = [
                'stat' => 'blocked',
                'msgtxt' => 'Sorry, your password was incorrect. Please double-check your password.',
                'login_attemp' => $this->session->userdata('attempt')
            ];
        } else {
            $this->Attempt(2);
//            $result = redirect(base_url('Signin'), $this->session->set_flashdata('err_msg', 'username not registered!'));
            $results = [
                'stat' => false,
                'msgtxt' => 'username not registered!',
                'csrf' => $this->bodo->Csrf()['hash'],
                'login_attemp' => $this->session->userdata('attempt')
            ];
        }
        return ToJson($results);
    }

    private function Attempt($id) {
        $attempt = $this->session->userdata('attempt');
        $attempt++;
        $this->session->set_userdata('attempt', $attempt);
        $data = [
            'uname' => Post_input("username"),
            'attempt' => $attempt
        ];
        switch ($id) {
            case 1:
                $this->M_auth->Penalty($data);
                if ($attempt == 3) {
                    $this->session->set_tempdata('blocked_account', true, 300);
                    $result = blocked_account();
                }
                $result = true;
                break;
            case 2:
                if ($attempt == 5 or $attempt >= 5) {
                    $this->session->set_tempdata('auth_sekuriti', true, 360);
                    $result = auth_sekuriti();
                }
                $result = true;
                break;
            default:
                $result = true;
        }
        return $result;
    }

    public function Logout() {
        $this->session->sess_destroy();
        return redirect(base_url('Signin'), 'refresh');
    }

}

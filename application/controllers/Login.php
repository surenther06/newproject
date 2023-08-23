<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Users_model');
    }

    public function user_login() {
        $login = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        $user = $this->Users_model->islogin($login);
        if ($user) :
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('m_logged_in', true);
            echo '1';
        else :
            echo '0';
        endif;
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('m_logged_in');
        redirect(base_url());
    }

}

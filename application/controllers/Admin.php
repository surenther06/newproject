<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Users_model');
    }

    public function index()
    {        
        $this->load->view('admin/login');
    }

    public function user_login() {
        // echo json_encode($this->input->post());
        // die();
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

    public function dashboard() {
        $customers = []; //$this->Customers_model->show();
        $colors = []; //$this->Colors_model->show();
        $jobs = []; //$this->Jobs_model->show();
        $data['customers'] = count($customers);
        $data['colors'] = count($colors);
        $data['jobs'] = count($jobs);
        $this->load->view('admin/dashboard', $data);
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('m_logged_in');
        redirect(base_url());
    }
}
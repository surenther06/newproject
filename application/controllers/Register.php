<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Register_model');
        // $this->load->model('Colors_model');
        // $this->load->model('Jobs_model');
    }

    public function index() {
        $member_register = $this->Register_model->show();        
        $data['member_register'] = $member_register;
        $this->load->view('admin/member_register/list', $data);
    }

    public function add_page() {
        $this->load->view('admin/member_register/add');
    }

    

    public function create() {
        $p_data = $this->input->post();
        // $p_data['status'] = '1';
        // $p_data['created_at'] = date('Y-m-d H:i:s');
        $i_register = $this->Register_model->insert($p_data);
        if ($i_register) :
            echo '1';
        else :
            echo '0';
        endif;
    }


    
}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Customers_model');
    }

    public function index() {
        $customers = $this->Customers_model->show();
        $data['customers'] = $customers;
        $this->load->view('admin/customers/list', $data);
    }

    public function add_page() {
        $this->load->view('admin/customers/add');
    }

    public function create() {
        $p_data = $this->input->post();
        $p_data['status'] = '1';
        $p_data['created_at'] = date('Y-m-d H:i:s');
        $i_customer = $this->Customers_model->insert($p_data);
        if ($i_customer) :
            echo '1';
        else :
            echo '0';
        endif;
    }

    public function edit($id) {
        $e_id = array('id' => $id);
        $customer = $this->Customers_model->edit_data($e_id);
        $data['customer'] = $customer;
        $this->load->view('admin/customers/edit', $data);
    }

    public function update() {
        $p_data = $this->input->post();
        $p_data['updated_at'] = date('Y-m-d H:i:s');
        $id = array('id' => $p_data['id']);
        unset($p_data['id']);
        $u_customer = $this->Customers_model->update($id, $p_data);
        if ($u_customer) :
            echo '1';
        else :
            echo '0';
        endif;
    }

    public function status() {
        $p_data = $this->input->post();
        $id = array('id' => $p_data['id']);
        unset($p_data['id']);
        $s_customer = $this->Customers_model->update($id, $p_data);
        if ($s_customer) :
            echo '1';
        else :
            echo '0';
        endif;
    }

    public function remove() {
        $p_data = $this->input->post();
        $r_customer = $this->Customers_model->delete($p_data);
        if ($r_customer) :
            echo '1';
        else :
            echo '0';
        endif;
    }

}

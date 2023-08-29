<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Colors extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Colors_model');
    }

    public function index() {
        $colors = $this->Colors_model->show();
        $data['colors'] = $colors;
        $this->load->view('admin/colors/list', $data);
    }

    public function add_page() {
        $this->load->view('admin/colors/add');
    }

    public function create() {
        $p_data = $this->input->post();
        $p_data['status'] = '1';
        $p_data['created_at'] = date('Y-m-d H:i:s');
        $i_color = $this->Colors_model->insert($p_data);
        if ($i_color) :
            echo '1';
        else :
            echo '0';
        endif;
    }

    public function edit($id) {
        $e_id = array('id' => $id);
        $color = $this->Colors_model->edit_data($e_id);
        $data['color'] = $color;
        $this->load->view('admin/colors/edit', $data);
    }

    public function update() {
        $p_data = $this->input->post();
        $p_data['updated_at'] = date('Y-m-d H:i:s');
        $id = array('id' => $p_data['id']);
        unset($p_data['id']);
        $u_color = $this->Colors_model->update($id, $p_data);
        if ($u_color) :
            echo '1';
        else :
            echo '0';
        endif;
    }

    public function status() {
        $p_data = $this->input->post();
        $id = array('id' => $p_data['id']);
        unset($p_data['id']);
        $s_color = $this->Colors_model->update($id, $p_data);
        if ($s_color) :
            echo '1';
        else :
            echo '0';
        endif;
    }

    public function remove() {
        $p_data = $this->input->post();
        $r_color = $this->Colors_model->delete($p_data);
        if ($r_color) :
            echo '1';
        else :
            echo '0';
        endif;
    }

}

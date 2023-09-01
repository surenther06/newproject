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
        $p_data = json_decode($this->input->post('Data'), true);
        $file_name = NULL;
        if (isset($_FILES['file'])) {
            $folder = 'course-images';
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }
            move_uploaded_file($_FILES['file']['tmp_name'], $folder . '/' . $_FILES['file']['name']);
            $file_name = $_FILES['file']['name'];
        }
        $p_data['image'] = $file_name;
        $i_course = $this->Colors_model->insert($p_data);
        if ($i_course) :
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
        $p_data = json_decode($this->input->post('Data'), true);
        $file_name = NULL;
        if (isset($_FILES['file'])) {
            $folder = 'course-images';
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }
            move_uploaded_file($_FILES['file']['tmp_name'], $folder . '/' . $_FILES['file']['name']);
            $file_name = $_FILES['file']['name'];
        }
        $p_data['image'] = $file_name;
        // $p_data['updated_at'] = date('Y-m-d H:i:s');
        $id = array('id' => $p_data['id']);
        unset($p_data['id']);
        $u_customer = $this->Colors_model->update($id, $p_data);
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

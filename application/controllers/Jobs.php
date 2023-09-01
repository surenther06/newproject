<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Customers_model');
        $this->load->model('Colors_model');
        $this->load->model('Jobs_model');
    }

    public function index() {
        $jobs = $this->Jobs_model->show();        
        $data['jobs'] = $jobs;
        $this->load->view('admin/jobs/list', $data);
    }

    public function add_page() {
        $this->load->view('admin/jobs/add');
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
        $i_course = $this->Jobs_model->insert($p_data);
        if ($i_course) :
            echo '1';
        else :
            echo '0';
        endif;
    }


    public function edit($id) {
        $e_id = array('id' => $id);
        $jobs = $this->Jobs_model->edit_data($e_id);
        $data['jobs'] = $jobs;
        $this->load->view('admin/jobs/edit', $data);
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
        $u_customer = $this->Jobs_model->update($id, $p_data);
        if ($u_customer) :
            echo '1';
        else :
            echo '0';
        endif;
    }


    public function remove() {
        $p_data = $this->input->post();
        $r_blogs = $this->Jobs_model->delete($p_data);
        if ($r_blogs) :
            echo '1';
        else :
            echo '0';
        endif;
    }
}

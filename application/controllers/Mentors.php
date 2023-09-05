<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mentors  extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Mentors_model');
    }

    public function index() {
        $mentors = $this->Mentorsmodel->show();
        $data['mentors'] = $mentors;
        $this->load->view('admin/mentor/list', $data);
    }
}

    ?>
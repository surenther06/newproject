<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Users_model');
        $this->load->model('Customers_model');
        $this->load->model('Colors_model');
        $this->load->model('Jobs_model');
    }

    public function index() {
        $customers = $this->Customers_model->show();
        $colors = $this->Colors_model->show();
        $jobs = $this->Jobs_model->show();
        $data['customers'] = count($customers);
        $data['colors'] = count($colors);
        $data['jobs'] = count($jobs);
        $this->load->view('dashboard', $data);
    }

}

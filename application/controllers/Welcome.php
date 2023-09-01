<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('session');
        ///$this->load->helper('form');
        // $this->load->model('auth_model');
        // $this->load->model('customers_model');
        $this->load->model('Colors_model');
        $this->load->model('Jobs_model');
		//$this->load->database(); 	
		$this->load->model('Customers_model');
	}

	public function index()
	{
		$customers = $this->Customers_model->show();
        $data['customers'] = $customers;
		$jobs = $this->Jobs_model->show();
        $data1['jobs'] = $jobs;
		$colors = $this->Colors_model->show();
        $data2['colors'] = $colors;
		$this->load->view('header');
		$this->load->view('welcome_message', $data , $data1, $data2);
		$this->load->view('footer');
	}

	public function signup()
	{
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}

	public function singlepage()
	{
		$this->load->view('header');
		$this->load->view('singlepage');
		$this->load->view('footer');
	}

	public function signin()
	{
		$this->load->view('header');
		$this->load->view('signin');
		$this->load->view('footer');
	}

	public function aboutus()
	{
		$this->load->view('header');
		$this->load->view('aboutus');
		$this->load->view('footer');
	}
	
}
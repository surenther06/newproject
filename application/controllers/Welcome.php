<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->helper('form');
        $this->load->model('auth_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
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
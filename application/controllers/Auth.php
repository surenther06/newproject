<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        // $this->load->database('myaspirations');
        $this->load->model('auth_model'); // Create this model later
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->auth_model->authenticate($username, $password); // Create this function in the model

        if ($user) {
            $this->session->set_userdata('user_id', $user->id);
            // redirect('dashboard'); // Change this to your dashboard page URL
            echo "hello";
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        redirect('auth');
    }
}
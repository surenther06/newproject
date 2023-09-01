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
    public function download($id) {
        require_once 'application/third_party/mpdf/autoload.php';
        $e_id = array('id' => $id);
        $job = $this->Jobs_model->edit_data($e_id);
        $c_id = array('id' => $job->customer_id);
        $customer = $this->Customers_model->edit_data($c_id);
        $colors = $this->Colors_model->show();
        $job_sizes = $this->job_sizes();
        $data['customer'] = $customer;
        $data['colors'] = $colors;
        $data['job'] = $job;
        $data['job_sizes'] = $job_sizes;
        $html = $this->load->view('jobs/download', $data, true);
//        echo $html;
//        die();
        $file_name = 'JOB' . sprintf('%05d', $job->id) . '-' . $job->job_date;
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->AddPage('P', 'A4', 0, '', 5, 5, 5, 5, 25, 15, 0, 'E');
        $mpdf->WriteHTML($html);
        $mpdf->Output($file_name . '.pdf', 'I');
    }

    public function job_sizes() {
        $job_sizes = [35, 36, 37, 38, 39, 40, 41, 42];
        return $job_sizes;
    }

}

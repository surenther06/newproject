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
        $status = array('status' => '1');
        $customers = $this->Customers_model->get_customers($status);
        $jobs = $this->Jobs_model->show();
        $data['customers'] = $customers;
        $data['jobs'] = $jobs;
        $this->load->view('admin/jobs/list', $data);
    }

    public function add_page() {
        $status = array('status' => '1');
        $customers = $this->Customers_model->get_customers($status);
        $colors = $this->Colors_model->get_colors($status);
        $job_sizes = $this->job_sizes();
        $data['customers'] = $customers;
        $data['colors'] = $colors;
        $data['job_sizes'] = $job_sizes;
        $this->load->view('admin/jobs/add', $data);
    }

    public function add_sizes() {
        $t_r_count = $this->input->post('t_r_count');
        $status = array('status' => '1');
        $colors = $this->Colors_model->get_colors($status);
        $job_sizes = $this->job_sizes();
        ?>
        <tr>
            <td class="serial_number"><?php echo $t_r_count; ?></td>
            <td>
                <input type="text" class="art_number form-control" maxlength="10">
            </td>
            <td>
                <select class="color_id form-control select2-show-search" data-placeholder="Choose One">
                    <option value=""></option>
                    <?php foreach ($colors as $key => $item) { ?>
                        <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                    <?php } ?>
                </select>
                <span class="color_id_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please select color *</span>
            </td>
            <?php foreach ($job_sizes as $job_size) { ?>
                <td>
                    <input type="text" class="job_qty form-control" maxlength="5">
                </td>
            <?php } ?>
            <td>
                <input class="total_pairs form-control" maxlength="5" disabled="">
            </td>
            <td class="text-center">
                <button type="button" class="remove-job-size-btn btn btn-icon btn-danger"><i class="fe fe-trash"></i></button>
            </td>
        </tr>
        <script type="text/javascript">
            $('.job_qty').inputmask('integer');

            $('.color_id').select2({
                minimumResultsForSearch: '',
                width: '100%'
            });

            $('.job_qty').keyup(function () {
                var row = $(this).closest('tr');
                var total_pairs = 0;
                row.find('.job_qty').each(function (i) {
                    if ($(this).val()) {
                        total_pairs += parseInt($(this).val());
                    } else {
                        total_pairs += 0;
                    }
                });
                row.find('.total_pairs').val(total_pairs);

                var final_total_pairs = 0;
                $('.job-sizes-table:eq(0) tbody').find('tr').each(function (j, items) {
                    var total_pairs = $(items).find('.total_pairs').val();
                    if (total_pairs) {
                        final_total_pairs += parseInt(total_pairs);
                    } else {
                        final_total_pairs += 0;
                    }
                });
                $('.final_total_pairs').val(final_total_pairs);
            });
        </script>
        <?php
    }

    public function create() {
        $p_data = json_decode($this->input->post('Data'), true);
        $job_date = strtotime($p_data['job_date']);
        $job_complete_date = strtotime($p_data['job_complete_date']);
        $file_name = NULL;
        if (isset($_FILES['file'])) {
            $folder = 'jobs-images';
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }
            move_uploaded_file($_FILES['file']['tmp_name'], $folder . '/' . $_FILES['file']['name']);
            $file_name = $_FILES['file']['name'];
        }
        $p_data['job_date'] = date('Y-m-d', $job_date);
        $p_data['job_complete_date'] = date('Y-m-d', $job_complete_date);
        $p_data['items'] = json_encode($p_data['items']);
        $p_data['job_img'] = $file_name;
        $p_data['created_at'] = date('Y-m-d H:i:s');
        $i_job = $this->Jobs_model->insert($p_data);
        if ($i_job) :
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

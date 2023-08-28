<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    protected $_table_name = 'users';

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function islogin($data) {
        $query = $this->db->get_where($this->_table_name, $data);
        return $query->row();
    }

}

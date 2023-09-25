<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    protected $_table_name = 'ryla_member_register';

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data) {
        return $this->db->insert($this->_table_name, $data);
    }

    public function show() {
        $this->db->select('*');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($this->_table_name);
        return $query->result_array();
    }

    public function get_colors($data) {
        $query = $this->db->get_where($this->_table_name, $data);
        return $query->result_array();
    }

    public function edit_data($data) {
        $query = $this->db->get_where($this->_table_name, $data);
        return $query->row();
    }

    public function update($id, $data) {
        $this->db->where($id);
        return $this->db->update($this->_table_name, $data);
    }

    public function delete($data) {
        return $this->db->where($data)->delete($this->_table_name);
    }

}

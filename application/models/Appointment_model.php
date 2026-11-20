<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    public function save($data) {
        return $this->db->insert('appointments', $data);
    }

    public function get_all() {
        $query = $this->db->get('appointments');
        return $query->result_array();
    }
    
}

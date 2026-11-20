<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Appointment_model');
        $this->load->library('session');
    }

    // Admin login page
    public function index() {
        $this->load->view('admin_login');
    }

    // Admin login validation
    public function login() {
        $uid = $this->input->post('uid');
        $pwd = $this->input->post('pwd');

        // Hardcoded credentials for simplicity
        if ($uid === 'ictacademy' && $pwd === 'puneict') {
            $this->session->set_userdata('admin_logged_in', TRUE);
            redirect('admin/appointments');
        } else {
            $this->session->set_flashdata('error', 'Invalid credentials');
            redirect('admin');
        }
    }

    // Display appointments
    public function appointments() {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin');
        }

        $data['appointments'] = $this->Appointment_model->get_all();
        $this->load->view('admin_appointments', $data);
    }

    // Admin logout
    public function logout() {
        $this->session->unset_userdata('admin_logged_in');
        redirect('admin');
    }
}

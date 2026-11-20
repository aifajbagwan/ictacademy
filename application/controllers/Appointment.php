<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the model
        $this->load->model('Appointment_model');
        // Load form validation library
        $this->load->library('form_validation');
    }

    public function book() {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('purpose', 'Purpose', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Load the form again with errors
            $this->load->view('appointment_form');
        } else {
            // Prepare data for saving
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'date' => $this->input->post('date'),
                'time' => $this->input->post('time'),
                'purpose' => $this->input->post('purpose')
            );

            // Save the data using the model
            if ($this->Appointment_model->save($data)) {
                // Redirect or load a success view
                redirect('appointment/success');
            } else {
                // Handle the error
                $this->load->view('appointment_form', array('error' => 'Failed to save data.'));
            }
        }
    }

    public function success() {
        $this->load->view('appointment_success');
    }
}

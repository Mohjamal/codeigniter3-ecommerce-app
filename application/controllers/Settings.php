<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SettingsModel');
    }

    // http://localhost/codeigniter3-ecommerce-app/settings/pincode
    public function pincode()
    {
        $this->form_validation->set_rules('pincode', 'pincode', 'required|trim');
        $this->form_validation->set_rules('delivery_charges', 'delivery charges', 'required|trim');
        $this->form_validation->set_rules('status', 'status', 'required|trim');

        if ($this->form_validation->run()) {
            $post = $this->input->post();
            $check = $this->SettingsModel->add_pincode($post);
            if ($check) {
                $this->session->set_flashdata('succMsg', 'Data Inserted Successfully');
                redirect('settings/pincode');
            }
        } else {
            $this->load->view('pincode');
        }
    }
}

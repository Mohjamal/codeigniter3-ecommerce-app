<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoryModel');
    }

    public function index()
    {
        $this->form_validation->set_rules('cat_name', 'category name', 'required|trim');
        $this->form_validation->set_rules('status', 'status', 'required|trim');

        if ($this->form_validation->run()) {
            $post = $this->input->post();
            $check = $this->CategoryModel->add_category($post);
            if ($check) {
                $this->session->set_flashdata('succMsg', 'Data Inserted Successfully');
                redirect('category');
            }
        } else {

            $data['categories'] = $this->CategoryModel->all_category();

            $this->load->view('dashboard/pages/category', $data);
        }
    }

    public function get_sub_cat()
    {
        $cat_id = $this->input->post('cat_id');
        print_r($this->CategoryModel->get_sub_cat($cat_id));
    }
}

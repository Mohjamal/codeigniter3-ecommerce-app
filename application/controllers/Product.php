<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoryModel');
    }

    public function index()
    {
        $this->form_validation->set_rules('cat_name', 'category name', 'required|trim');

        if ($this->form_validation->run()) {
        } else {

            $data['categories'] = $this->CategoryModel->all_category();

            $this->load->view('dashboard/pages/product', $data);
        }
    }
}

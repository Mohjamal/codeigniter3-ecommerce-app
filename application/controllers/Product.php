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
        $this->form_validation->set_rules('prod_id', 'product ID', 'required|trim');
        $this->form_validation->set_rules('category', 'category', 'required|trim');
        $this->form_validation->set_rules('prod_name', 'product name', 'required|trim');
        $this->form_validation->set_rules('brand', 'brand', 'required|trim');
        $this->form_validation->set_rules('featured', 'featured', 'required|trim');
        $this->form_validation->set_rules('highlights', 'highlights', 'required|trim');
        $this->form_validation->set_rules('description', 'description', 'required|trim');
        $this->form_validation->set_rules('stock', 'stock', 'required|trim');
        $this->form_validation->set_rules('mrp', 'mrp', 'required|trim');
        $this->form_validation->set_rules('selling_price', 'selling price', 'required|trim');
        $this->form_validation->set_rules('status', 'status', 'required|trim');

        if (empty($_FILES['prod_main_page']['name'])) {
            $this->form_validation->set_rules('prod_main_image', 'product image', 'required|trim');
        }

        if ($this->form_validation->run()) {
        } else {

            $data['categories'] = $this->CategoryModel->all_category();

            $this->load->view('dashboard/pages/product', $data);
        }
    }
}

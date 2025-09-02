<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
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

        if (empty($_FILES['prod_main_image']['name'])) {
            $this->form_validation->set_rules('prod_main_image', 'product image', 'required|trim');
        }

        if ($this->form_validation->run()) {

            $post = $this->input->post();

            $config = array(
                'upload_path' => './uploads/',
                'allowed_types' => '*',
            );

            $this->load->library('upload', $config);
            $this->upload->do_upload('prod_main_image');

            $data = $this->upload->data();

            $post['prod_main_image'] = $data['raw_name'] . $data['file_ext'];

            print_r($post);

            $check = $this->ProductModel->add_product($post);
            if ($check) {
                $this->session->set_flashdata('succMsg', 'Product added Successfully');
                redirect('product');
            } else {
                $this->session->set_flashdata('errMsg', 'Product failed to add');
                redirect('product');
            }
        } else {
            $data['categories'] = $this->CategoryModel->all_category();

            if ($this->session->userdata('prod_id') != '') {
                $prod_id = $this->session->userdata('prod_id');
            } else {
                $prod_id = $this->session->set_userdata('prod_id', mt_rand(11111, 99999));
            }

            $data['prod_id'] = $prod_id;

            $this->load->view('dashboard/pages/product', $data);
        }
    }
}

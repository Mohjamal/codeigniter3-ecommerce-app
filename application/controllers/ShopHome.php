<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ShopHome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ShopHomeModel');
    }

    public function index()
    {
        $data['banners'] = $this->ShopHomeModel->get_all_banners();

        $this->load->view('shop/pages/index', $data);
    }
}

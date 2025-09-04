<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ShopHomeModel extends CI_Model
{
    public function get_all_banners()
    {
        $q = $this->db->where('status', '1')->order_by('id', 'desc')->get('ec_banner');

        if ($q->num_rows()) {
            return $q->result();
        } else {
            return false;
        }
    }
}

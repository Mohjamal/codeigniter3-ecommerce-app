<?php
defined('BASEPATH') or exit('No direct script access allowed');

class categoryModel extends CI_Model
{
    public function add_category($post)
    {
        $post['added_on'] = date('d M, Y');
        $post['cat_id'] = mt_rand(11111, 99999);

        $q = $this->db->insert('ec_category', $post);
        if ($q) {
            return true;
        } else {
            return false;
        }
    }

    public function all_category()
    {
        $q = $this->db->where(['status' => 1, 'parent_id' => ''])->get('ec_category');
        if ($q->num_rows()) {
            return $q->result();
        }
    }
}

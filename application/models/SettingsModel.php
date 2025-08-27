<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingsModel extends CI_Model
{
    public function add_pincode($post)
    {
        $q = $this->db->insert('ec_pincode', $post);
        if ($q) {
            return true;
        } else {
            return false;
        }
    }
}

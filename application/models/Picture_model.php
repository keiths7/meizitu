<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picture_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_pic()
    {
    	return array();
    }
}
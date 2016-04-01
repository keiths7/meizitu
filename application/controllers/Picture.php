<?php
class Picture extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('picture_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data = $this->picture_model->getPictureList(0,10);
        var_dump( $data );
        $this->load->view('picture/list', $data);
    }

    public function view($slug = NULL)
    {
        echo phpinfo();
        //$this->load->view('templates/header', $data);
    }
}

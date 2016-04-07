<?php
class Picture extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('picture_model');
        $this->load->helper('url_helper');
        $this->load->library('pagination');
    }

    public function index($page=0)
    {
        $pageCount = 20;
        $picInfo = $this->picture_model->getPictureList($page, $pageCount);
        
        $config['base_url'] = '/picture/index';
        $config['total_rows'] = $picInfo['count'];
        $config['per_page'] = 20;
        $this->pagination->initialize($config);
        $pages = $this->pagination->create_links();
        
        $data['pictures'] = $picInfo['data'];
        $data['pages'] = $pages;
        
        $this->load->view('picture/index', $data);
    }

    public function view($slug = NULL)
    {
        echo phpinfo();
        //$this->load->view('templates/header', $data);
    }
}

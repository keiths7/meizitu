<?php
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tags_model');
        $this->load->model('picture_model');
        $this->load->library('pagination');
        $this->load->helper('url_helper');
    }

    public function adminTags( $start = 0 )
    {
        $arrRes = ResData::getInstance();
        $pageCount = 20;
        $picInfo = $this->picture_model->getPictureList( $start, $pageCount );
        $config['base_url'] = '/admin/admintags';
        $config['total_rows'] = $picInfo['count'];
        $config['per_page'] = 20;
        $this->pagination->initialize($config);
        $pages = $this->pagination->create_links();

        //获取分类信息
        $tagsList = $this->tags_model->getTags();

        $data['pictures'] = $picInfo['data'];
        $data['pages'] = $pages;
        $data['tagsList'] = $tagsList;
        #var_dump($picInfo);
        #echo $pages;
        $this->load->view('admin/admintags', $data);


    }

    public function setTags( $pId=0, $tId=0 ) {
        if ( $pId == 0 || $tId == 0 ) {
            die;
        }
        $res = $this->tags_model->setPicTag( $pId, $tId );
        $arrRes = ResData::getInstance();
        $arrRes['res'] = $res;
        if ( !$res ){
            $arrRes['error']['msg'] = "Db error";
        }
        echo json_encode( $arrRes );
        return ;
    }

    public function view($slug = NULL)
    {
        echo phpinfo();
        //$this->load->view('templates/header', $data);
    }

    public function test()
    {
    }
}

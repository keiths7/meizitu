<?php
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tags_model');
        $this->load->helper('url_helper');
    }

    public function adminTags( $tId = 1 )
    {
        $arrRes = ResData::getInstance();
        var_dump( $arrRes );
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
}

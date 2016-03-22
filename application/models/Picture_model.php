<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picture_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //TODO 获取所有图片列表
    public function getPictureList(){}

    //TODO 获取图片详情
    public function getPictureDetail( $intPId ){}

    // TODO 根据标签类型取图片
    public function getPictureListByTags( $intTId ) {}

    //TODO 后台管理-图片分类
    public function setPictureTagsId( $intPId, $intTId ){}



}
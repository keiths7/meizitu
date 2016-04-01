<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags_model extends CI_Model {

    private $_tagsId;

    /**
     * @return mixed
     */
    public function getTagsId()
    {
        return $this->_tagsId;
    }

    /**
     * @param mixed $tagsId
     */
    public function setTagsId($tagsId)
    {
        $this->_tagsId = $tagsId;
    }

    public function __construct( $tagsId = 0 )
    {
        $this->_tagsId = $tagsId;
        $this->load->database();
    }

    //TODO 获取分类列表
    public function getTags(){}

    public function setPicTag( $pId, $tId = 0 ) {
        if ( $tId === 0 ) {
            $tId = $this->_tagsId;
        }
        $data = array(
            "tid"   => $tId,
            "pid"   => $pId,
            "ifdel" => 0
        );
        $res = $this->db->insert( "TagsPicRelation", $data );
        return $res;
    }



}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picture_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //TODO 获取所有图片列表
    public function getPictureList( $start, $count ) {
        $query = $this->db->get( 'PicBaseInfo',$count,$start );
        $list =  array();
        foreach ( $query->result_array() as $row ) {
            $list[] = $row;
        }
        $count = $this->db->count_all_results( 'PicBaseInfo' );
        $data = array(
            "count" => $count,
            "data" => $list,
        );
        return $data;
    }

    //TODO 获取图片详情
    public function getPictureDetail( $intPId ){}

    // TODO 根据标签类型取图片
    public function getPictureListByTags( $intTId ) {}

    //TODO 后台管理-图片分类
    public function setPictureTagsId( $intPId, $intTId ){}

    /**
     * 获取图片tid
     * @param $intPId 图片ID
     * @return array
     */
    public function getPictureTagsId( $intPId ) {

        $sql = 'select tid,pid from TagsPicRelation where pid = ? and ifdel = 0';
        $query =$this->db->query( $sql, array($intPId) );
        $intTIds = array();
        foreach ( $query->result_array() as $row ) {
            $intTIds[] = $row['tid'];
        }
        return $intTIds;

    }


}

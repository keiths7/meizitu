<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ResData
{
    protected $CI;

    public function __construct(){
        $this->CI = & get_instance();
    }

    public static function getInstance(){
        return array(
            "res"   => false,
            "data"  => array(),
            "error" => array(
                "code" => 0,
                "msg"  => ""
            )
        );
    }
}
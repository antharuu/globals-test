<?php
namespace App\Request;

class Request{
    public $get;
    public $post;
    public $cookie;

    public function __construct()
    {
        $this->get = filter_input_array(INPUT_GET);
        $this->post = filter_input_array(INPUT_POST);
        $this->cookie = filter_input_array(INPUT_COOKIE);
    }

}
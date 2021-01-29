<?php
class Request{
    public static $get;
    public static $post;
    public static $session;
    public static $cookie;

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
        $this->session = $_SESSION;
        $this->cookie = $_COOKIE;
    }

}
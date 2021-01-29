<?php
session_start();
require_once 'Get.php';
require_once 'Session.php';

$test = Get::key("test");

var_dump($test);

Session::set("test", "brouette");

var_dump(Session::all());

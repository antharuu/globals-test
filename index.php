<?php
use App\Request\Request;

require_once 'vendor/autoload.php';

$request = new Request;

$test = $request->get;

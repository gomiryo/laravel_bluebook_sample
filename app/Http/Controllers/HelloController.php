<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
	function index(Request $request, Response $response) {
		$str = "request = {$request}";
		$str .="response = {$response}";
		return $str;
	}

	/*
	// アクションメソッドindexを追加
    public function index(){
		return '<a href="/hello/other">other</a>';
	}
	public function other(){
		return "other.";
	}
	*/
}

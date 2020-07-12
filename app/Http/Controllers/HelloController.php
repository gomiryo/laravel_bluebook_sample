<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	function __invoke(){
		return "single action controller";
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

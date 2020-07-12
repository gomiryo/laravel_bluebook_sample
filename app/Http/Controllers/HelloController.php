<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	// アクションメソッドindexを追加
    public function index(){
		return " index method start !";
	}
}

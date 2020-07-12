<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	// アクションメソッドindexを追加
    public function index($id = "noname", $pass = "unknown"){
		return " id = {$id},  pass = {$pass} ";
	}
}

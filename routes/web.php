<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 第一引数：ルート情報
// 第二引数：コントローラ名＠アクション名
Route::get("hello/{id?}/{pass?}", "HelloController@index");

/*
Route::get("hello/{mes?}", function ($mes = "no message") {

$html = <<<EOF
<html>
<title>Hello</title>
<style>
body {font-size:16pt;}
h1{font-size:100pt; text-align:right; color:#eee;
	margin:-40px 0px -50px 0px;}
</style>
	<body>
		<h1>Hello</h1>
		<p>{$mes}</p>
		<p>これはサンプルで作ったページです</p>
	</body>
</html>
EOF;

	return $html;
});
*/

//Route::get('/', function () {
//    return view('welcome');
//});

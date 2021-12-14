<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

// 全ユーザーを取得
Route::get('/users', function () {
  $users = DB::table('users')->get();

  return response()->json(['users' => $users]);
});

// 新規ユーザーを作成
Route::post('/user', function (Request $request) {
  var_dump($request);

  $users = DB::table('users')->insert(
    ['name' => $request->name, 'auth_type' => $request->auth_type]
  );

  return response()->json($users);
});

// ユーザー情報を変更
Route::put('/user/{id}', function (Request $request, $id) {

  $update_array = ['name' => $request->name, 'email' => $request->email];

  $users = DB::table('users')
    ->where('id', $id)
    ->update($update_array);

  return response()->json(['users' => $users]);
});

// ユーザーを削除
Route::delete('/user/{id}', function ($id) {
  $users = DB::table('users')->where('id', $id)->delete();

  return response()->json(['users' => $users]);
});

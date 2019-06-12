<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/my-request', 'MyController@GetUrl');
Route::get('/get-cookie', 'MyController@GetCookie');
Route::get('/set-cookie', 'MyController@SetCookie');
Route::get('/get-upload', function() {
    return view('upload');
})->name('GetUpload');
Route::post('/post-upload', ['as'=>'PostUpload', 'uses'=>'MyController@PostUpload']);
Route::get('/get-users', function () {
    $users = DB::table('users')->get();
    // var_dump($users);
    foreach($users as $row) {
        foreach($row as $key=>$value) {
            echo $key . ": " . $value . "<br>";
        }
        echo "<hr>";
    }
});
Route::get('/save-users', function () {
    $users = new App\User();
    $users->name = "Phan Thị Thanh Ngọc";
    $users->email = "ngoc.phan@gmail.com";
    $users->password = bcrypt('thinh');
    $users->save();
});
Route::get('/all-users', 'MyController@AllUsers');

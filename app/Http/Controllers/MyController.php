<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;
use App\User;

class MyController extends Controller
{
    public function GetUrl(Request $request) {
        return $request->path();
    }
    public function GetCookie(Request $request) {
        return $request->cookie('yuu');
    }
    public function SetCookie() {
        $response = new Response();
        $response->withCookie('yuu', 'Yuudachi', 5);
        return $response;
    }
    public function PostUpload(Request $request) {
        if ($request->hasFile('myfile')) {
            $now = Carbon::now()->timestamp;
            $file = $request->file('myfile');
            $file->move('images', $now . '.' . $file->getClientOriginalExtension('myfile'));
        } else {
            return redirect()->route('GetUpload');
        }
    }
    public function AllUsers() {
        $users = User::paginate(2);
        return view('users', ['users'=>$users]);
    }
}

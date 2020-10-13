<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class McqController extends Controller
{
    public function index() {
        // return "welcome";
        return \view('index');
    }

    public function login(Request $request) {
        print_r($request->input());
        $model = User::where(['email' => $request->email, 'password' => $request->password])->get();
        return $model;
        print_r($model);
        die;
    }
}

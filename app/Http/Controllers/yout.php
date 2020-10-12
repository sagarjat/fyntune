<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class yout extends Controller
{
    function index(Request $request){
        
        // $this->validate($request, [
        //     'uname' => 'required|min:5',
        //     'password'=> 'required',
        //     'email' => 'email'
        // ]);

            // return view('first',['items' => $request->input()]);
        // print_r($request->input());
        // $request->session()->put('username',$request->input('uname'));
        // print_r($request->session()->get('username'));

        //1. retrive data from tABLE 
        // return DB::select("select * from user");



        //2.JOIN Multiple tables 
        // $data = DB::table('user')
        // ->join('gender','gender.user_id','=','user.id')
        // ->get();
        // echo "<pre>";
        // print_r($data);
    }
}

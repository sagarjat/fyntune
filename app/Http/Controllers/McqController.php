<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class McqController extends Controller
{
    public function index() {
        // return "welcome";
        return \view('index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contribute extends Controller
{
    public function index(){
        return view('contribute');
    }
}

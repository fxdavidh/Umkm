<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function viewHome(){
        return view('index');
    }

    public function viewUmkmCreate(){
        return view('umkmCreate');
    }
}

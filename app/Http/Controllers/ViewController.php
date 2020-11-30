<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewAdminCreate(){
        return view('adminCreate');
    }

    public function viewUmkmCreate(){
        return view('umkmCreate');
    }
}

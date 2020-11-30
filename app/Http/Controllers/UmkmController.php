<?php

namespace App\Http\Controllers;

use App\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function create(Request $request){
        Umkm::create([
            'owner' => $request->owner, 
            'idNumber' => $request->idNumber, 
            'dob' => $request->dob,
            'title' => $request->title, 
            'field' => $request->field, 
            'description' => $request->description,
            'address' => $request->address,
            'district' => $request->district,
            'number' => $request->number,
            'image' => $request->image
        ]);
        return view('umkmCreate');
    }
}

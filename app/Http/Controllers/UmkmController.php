<?php

namespace App\Http\Controllers;

use App\Http\Requests\UmkmRequest;
use App\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UmkmController extends Controller
{
    public function create(UmkmRequest $request){
        
        $path = $request -> file('image') -> store('umkmImages');
        
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
            'image' => $path
        ]);

        return redirect(route('viewHome'))->with('success', 'Register success');
    }

    public function show(){
        $umkms = Umkm::all();
        return view('umkmView', compact('umkms'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UmkmRequest;
use App\Http\Requests\UmkmUpdateRequest;
use App\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function showDashboard(){
        $umkms = Umkm::all();
        return view('adminDashboard', compact('umkms'));
    }

    public function showUpdate($id){
        $umkm = Umkm::find($id);
        return view('umkmUpdate', ['umkmUpdate' => $umkm]);
    }

    public function update(UmkmUpdateRequest $request, $id){
        $umkm = Umkm::where('id', '=', $id)->first();

        // $path = $request -> file('image') -> store('umkmImages');
        // Storage::delete($umkm->image);

        $umkm -> update([
            'owner' => $request->owner, 
            'idNumber' => $request->idNumber, 
            'dob' => $request->dob,
            'title' => $request->title, 
            'field' => $request->field, 
            'description' => $request->description,
            'address' => $request->address,
            'district' => $request->district,
            'number' => $request->number,
            'verified' => $request->verified
        ]);

        return redirect(route('viewDashboard'));
    }

    public function delete($id){
        Umkm::destroy($id);
        return redirect(route('viewDashboard'));
    }

    public function adminLogout(){
        auth()->logout();
        return redirect(route('viewHome'));
    }
}

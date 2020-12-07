<?php

namespace App\Http\Controllers;

use App\Http\Requests\UmkmRequest;
use App\Http\Requests\UmkmUpdateRequest;
use App\Umkm;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class UmkmController extends Controller
{

    public function create(UmkmRequest $request){
        
        $path = $request -> file('image') -> store('umkmImages');
        
        Umkm::create([
            'owner' => $request->owner, 
            'dob' => $request->dob,
            'email' => $request->email,
            'idNumber' => $request->idNumber, 
            'title' => $request->title, 
            'field' => $request->field, 
            'description' => $request->description,
            'district' => $request->district,
            'number' => $request->number,
            'image' => $path
        ]);

        return $this->show();
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

        $umkm -> update([
            'owner' => $request->owner, 
            'dob' => $request->dob,
            'email' => $request->email,
            'idNumber' => $request->idNumber, 
            'title' => $request->title, 
            'field' => $request->field, 
            'description' => $request->description,
            'number' => $request->number,
            'verified' => $request->verified
        ]);

        return redirect(route('viewDashboard'));
    }

    public function waAPI($id){
        $umkm = Umkm::where('id', '=', $id)->first();
        $wa = $umkm -> number;
        $api = 'https://wa.me/'.$wa;
        return redirect()->away($api);
    }


    public function delete($id){
        Umkm::destroy($id);
        return redirect(route('viewDashboard'));
    }

    public function adminLogout(){
        auth()->logout();
        return redirect(route('viewUmkm'));
    }

    public function search(Request $request){
        $search = $request -> search;
        $umkm = \DB::table('Umkms')
        ->where('field', 'like', '%'.$search.'%');
        $umkm = $umkm -> get();
        return view('umkmView', ['umkms' => $umkm]);
    }
}

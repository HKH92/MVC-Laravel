<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
    	
    	return view('form');
    }

    public function sapa(Request $request){
    	$nama_awal = $request->input('nama_awal');
    	$nama_akhir =$request->input('nama_akhir');
    	
    	return view('sapa',['nama_awal'=>$nama_awal, 'nama_akhir'=>$nama_akhir]);
    }
}

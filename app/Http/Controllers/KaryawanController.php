<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Karyawan;
class KaryawanController extends Controller
{
    function index(){
		return view('add.index');
	}
	function store(Request $request){

		$idkaryawan = Helper::IDGenerator(new karyawan, 'idkaryawan',3,'K');
		$data  = new Karyawan;
		$data->idkaryawan= $idkaryawan;
		$data->namakaryawan = $request->name;
		$data->jeniskeamin = $request->gender;
		$data->alamat = $request->alamat;
		$data->tempatlahir = $request->lahir;
		$data->tgllahir = $request->tanggal;
		$data->golongan = $request->golongan;
		$data->save();
		return redirect('/karyawan');

	}
	
	function edit($id){
		$karyawan = Karyawan::find($id);
		dd($karyawan);
	}
}

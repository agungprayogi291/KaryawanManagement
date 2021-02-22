<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Transaksi;
use App\Models\Karyawan;
use App\Models\Gaji;
use Illuminate\Support\Facades\DB;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$karyawan = Karyawan::all();
		$data=[
			'karyawans' => $karyawan
		];
        return view('transaksi.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	//mmemotong nilai string substring 	
	
		//m=dat karyawan 
		$karyawan = Karyawan::where('idkaryawan',$request->karyawan)->first();
		$gaji = DB::table('gaji')->where('golongan',$karyawan->golongan)->first();
		
		$prefix = intval(substr($request->tahun,2));
	
		$bulan = intval($request->bulan);
		$tahun = intval($request->tahun);
		$idkaryawan = $request->karyawan;
		$lembur = $request->lembur;
		$transport = $request->transport;
		
        $idtransaksi = Helper::IDTransaksi(new transaksi,'idtransaksi',6,$prefix,$bulan);
		$transaksi = new Transaksi;
		$transaksi->idtransaksi = $idtransaksi;
		$transaksi->bulan = $bulan;
		$transaksi->tahun = $tahun;
		$transaksi->idkaryawan = $idkaryawan;
		$transaksi->transport = $transport;
		$transaksi->lembur = $lembur;
		$transaksi->gajitotal = $gaji->gajipokok + $gaji->tunjangan + $lembur - $transport;
	
		$transaksi->save();
		return back();
	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

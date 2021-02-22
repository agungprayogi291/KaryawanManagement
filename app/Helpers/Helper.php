<?php
namespace App\Helpers;

class Helper
{
	public static function IDGenerator($model,$trow,$length = 3, $prefix){
		$data = $model::orderBy('idkaryawan','desc')->first();
		if(!$data){
			$og_length = $length;
			$last_number = "";
		}else{
			$code = substr($data->$trow,strlen($prefix) + 1);
			$actial_last_number = ($code/1)*1;
			$increment_last_number = $actial_last_number + 1;
			$last_number_length = strlen($increment_last_number);
			$og_length = $length - $last_number_length;
			$last_number = $increment_last_number;
		}
		$zeros = "";
		for($i = 0 ; $i < $og_length ; $i++){
			$zeros.="0";
		}
		return $prefix."".$zeros.$last_number;
	}
	public static function IDTransaksi($model,$trow,$length =5 ,$prefix,$bulan){
		$data = $model ::orderBy('idtransaksi','desc')->first();
		if(!$data){
			$og_length = $length;
			$last_number = "";
		}else{
			$code = substr($data->$trow,strlen($prefix) + 1);
			$actial_number_length = ($code/1) + 1;
			$increment_number_length = $actial_number_length + 1;
			$last_number_length = strlen($increment_number_length);
			$og_length = $length - $last_number_length;
			$last_number = $increment_number_length;
		}
		$zeros = "";
		for($i = 0; $i < $og_length ; $i++){
			$zeros.="0";
		}
		return $prefix.$bulan."".$zeros.$last_number;
	}
	
}
?>
<?php
namespace App\Helpers

class Transaksi{
	public static function IDTransaksi($model,$trow,$length =6 ,$prefix){
		$data = $model ::orderBy('idtransaksi','desc')->first();
		if(!$data){
			$og_length = $ength;
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
		return $prefix."".$zeros.$last_number;
	}
}

?>
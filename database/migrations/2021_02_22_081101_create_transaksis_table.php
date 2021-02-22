<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->string("idtransaksi",9)->primary();
			$table->integer("bulan");
			$table->integer("tahun");
			$table->string("idkaryawan",5)->refrences("idkaryawan")->on('karyawans')->constrained();
			$table->integer("transport");
			$table->integer("lembur");
			$table->integer("gajitotal");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}

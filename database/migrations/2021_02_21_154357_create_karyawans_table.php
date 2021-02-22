<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->string("idkaryawan",5)->primary();
			$table->string("namakaryawan",25);
			$table->char("jeniskeamin",1);
			$table->string("alamat",35);
			$table->string("tempatlahir",30);
			$table->date("tgllahir");
			$table->char("golongan",1)->constrained("gajis");
            $table->char("status",1)->nullable();
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
        Schema::dropIfExists('karyawans');
    }
}

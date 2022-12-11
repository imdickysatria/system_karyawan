<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schedule_id')->unsigned();
            $table->integer('attendace_id')->unsigned();
            $table->integer('bulan_ke');
            $table->integer('jumlah_lembur');
            $table->string('code');
            $table->string('periode');
            $table->enum('status',['Freelance','Kontrak','Tetap']);
            $table->date('tanggal_absen');
            $table->time('waktu_masuk');
            $table->time('waktu_keluar');
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
        Schema::dropIfExists('absenses');
    }
};

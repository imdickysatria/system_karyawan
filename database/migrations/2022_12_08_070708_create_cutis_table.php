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
        Schema::create('cutis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('staff_id');
            $table->integer('jumlah_cuti');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->text('keterangan')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('staffs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cutis');
    }
};

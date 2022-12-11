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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('position_id');
            $table->unsignedInteger('users_id')->nullable();
            $table->string('name');
            $table->date('birth');
            $table->text('address')->nullable();
            $table->date('startdate');
            $table->string('phone')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
};

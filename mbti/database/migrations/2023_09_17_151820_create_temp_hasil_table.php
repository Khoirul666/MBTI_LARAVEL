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
        Schema::create('temp_hasils', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->integer('time_p1');
            $table->integer('jawaban_p1')->default('0');
            $table->integer('time_p2');
            $table->integer('jawaban_p2')->default('0');
            $table->integer('time_p3');
            $table->integer('jawaban_p3')->default('0');
            $table->integer('time_p4');
            $table->integer('jawaban_p4')->default('0');
            $table->integer('time_p5');
            $table->integer('jawaban_p5')->default('0');
            $table->integer('time_p6');
            $table->integer('jawaban_p6')->default('0');
            $table->integer('time_p7');
            $table->integer('jawaban_p7')->default('0');
            $table->integer('time_p8');
            $table->integer('jawaban_p8')->default('0');
            $table->integer('time_p9');
            $table->integer('jawaban_p9')->default('0');
            $table->integer('time_p10');
            $table->integer('jawaban_p10')->default('0');
            $table->integer('time_p11');
            $table->integer('jawaban_p11')->default('0');
            $table->integer('time_p12');
            $table->integer('jawaban_p12')->default('0');
            $table->integer('time_p13');
            $table->integer('jawaban_p13')->default('0');
            $table->integer('time_p14');
            $table->integer('jawaban_p14')->default('0');
            $table->integer('time_p15');
            $table->integer('jawaban_p15')->default('0');
            $table->integer('time_p16');
            $table->integer('jawaban_p16')->default('0');
            $table->integer('time_p17');
            $table->integer('jawaban_p17')->default('0');
            $table->integer('time_p18');
            $table->integer('jawaban_p18')->default('0');
            $table->integer('time_p19');
            $table->integer('jawaban_p19')->default('0');
            $table->integer('time_p20');
            $table->integer('jawaban_p20')->default('0');
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
        Schema::dropIfExists('temp_hasils');
    }
};

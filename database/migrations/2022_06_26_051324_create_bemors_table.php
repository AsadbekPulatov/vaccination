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
        Schema::create('bemors', function (Blueprint $table) {
            $table->id();
            $table->string('familya');
            $table->string('ismi');
            $table->string('otasining_ismi');
            $table->string('onasini_ismi');
            $table->date('tugilgan_sana');
            $table->string('millati');
            $table->string('tugilgan_joyi');
            $table->string('guvohnoma_raqami');
            $table->string('yosh');
            $table->string('manzili');
            $table->string('tel_number');
            $table->string('kim_olib_keldi');
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
        Schema::dropIfExists('bemor');
    }
};

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
        Schema::create('helps', function (Blueprint $table) {
            $table->id();
            $table->text('sec1_heading')->nullable();
            $table->string('sec1_paragraph')->nullable();

            $table->text('sec2_heading')->nullable();
            $table->string('sec2_paragraph')->nullable();

            $table->string('sec3_heading')->nullable();
            $table->string('sec3_paragraph')->nullable();
            $table->string('sec3_artical_list')->nullable();



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
        Schema::dropIfExists('helps');
    }
};

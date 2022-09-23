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
        Schema::create('help_cards', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('heading')->nullable();
            $table->string('paragraph')->nullable();
            $table->string('info_heading')->nullable();
            $table->string('info_paragraph')->nullable();
            $table->string('heading_1')->nullable();
              $table->string('paragraph_1')->nullable();
            $table->string('heading_2')->nullable();
            $table->string('paragraph_2')->nullable();
             $table->string('image')->nullable();
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
        Schema::dropIfExists('help_cards');
    }
};

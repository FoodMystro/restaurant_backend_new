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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('availability')->nullable();
            $table->string('preparation_time')->nullable();
            $table->string('delivery')->nullable();
            $table->string('collection')->nullable();
            $table->string('table_service')->nullable();
            $table->string('photo')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable();

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
        Schema::dropIfExists('items');
    }
};

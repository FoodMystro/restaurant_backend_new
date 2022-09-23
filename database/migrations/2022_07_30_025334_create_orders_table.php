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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('unique_code',25)->uniqid();
            $table->string('type',25)->nullable();
            $table->string('grand_total',25)->nullable();
            $table->string('sub_total',25)->nullable();
            $table->string('tax',125)->nullable();
            $table->string('discount',125)->nullable();
            $table->string('status',25)->nullable();
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
        Schema::dropIfExists('orders');
    }
};

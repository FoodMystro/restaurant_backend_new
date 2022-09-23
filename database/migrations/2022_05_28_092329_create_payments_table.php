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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_Online_Payment')->nullable();
            $table->string('delivery_COD')->nullable();
            $table->string('table_service_online_payment')->nullable();
            $table->string('table_service_COD')->nullable();
            $table->string('collection_online_payment')->nullable();
            $table->string('collection_COD')->nullable();
            $table->string('default_currency')->nullable();
            $table->string('Stripe_api_Key')->nullable();
            $table->string('secret_key')->unique()->nullable();
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
        Schema::dropIfExists('payments');
    }
};

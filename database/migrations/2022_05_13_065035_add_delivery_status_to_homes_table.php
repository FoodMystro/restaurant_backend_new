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
        Schema::table('homes', function (Blueprint $table) {

            $table->string('delivery_status',20)->after('sec3_delivery_Etime')->nullable();
            $table->string('collection_status',20)->after('sec3_collection_Etime')->nullable();
            $table->string('table_service_status',20)->after('sec3_table_service_Etime')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homes', function (Blueprint $table) {
            //
        });
    }
};

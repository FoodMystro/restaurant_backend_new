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
            $table->string('status_1')->after('sec3_table_service_Etime')->nullable();
            $table->string('status_2')->after('sec4_card1_day7_Etime')->nullable();
            $table->string('status_3')->after('sec4_card2_day7_Etime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homes');
        // Schema::table('homes', function (Blueprint $table) {
        //     $table->dropcolumn('status');
        // });
    }
};

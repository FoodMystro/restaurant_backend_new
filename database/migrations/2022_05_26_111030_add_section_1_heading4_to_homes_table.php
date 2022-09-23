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
            $table->text('sec_1_heading4')->after('sec_1_heading3')->nullable();
            $table->text('sec_1_heading5')->nullable();
            $table->text('sec_1_heading6')->nullable();
            $table->text('sec_1_heading7')->nullable();
            $table->text('sec_1_heading8')->nullable();
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

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
        Schema::table('users', function (Blueprint $table) {

            $table->string('photo')->nullable();
            $table->string('last_name')->nullable();
            $table->string('telephone')->unique()->nullable();
            $table->string('Personal_info')->nullable();
            $table->string('old_password')->nullable();
            $table->string('new_password')->nullable();
            $table->string('confirm_new_password')->nullable();
            $table->string('old_email')->unique()->nullable();
            $table->string('new_email')->unique()->nullable();
            $table->string('confirm_new_email')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

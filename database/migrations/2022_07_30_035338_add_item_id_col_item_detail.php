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
        foreach([
            'ingredients',
            'item__options'
        ] as $tablename){
            Schema::table($tablename, function(Blueprint $table){
                // $table->foreignId('item_id')->constrained('items');
                $table->foreignId('item_id')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        foreach ([
            'ingredients',
            'item__options'
        ] as $tableName) {
            Schema::table($tableName);
        }
    }
};

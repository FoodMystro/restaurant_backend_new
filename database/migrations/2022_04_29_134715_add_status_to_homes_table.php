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
            $table->string('status_card1_day1',20)->after('sec4_card1_day1_Etime')->nullable();
            $table->string('status_card1_day2',20)->after('sec4_card1_day2_Etime')->nullable();
            $table->string('status_card1_day3',20)->after('sec4_card1_day3_Etime')->nullable();
            $table->string('status_card1_day4',20)->after('sec4_card1_day4_Etime')->nullable();
            $table->string('status_card1_day5',20)->after('sec4_card1_day5_Etime')->nullable();
            $table->string('status_card1_day6',20)->after('sec4_card1_day6_Etime')->nullable();
            $table->string('status_card1_day7',20)->after('sec4_card1_day7_Etime')->nullable();

            $table->string('status_card2_day1',20)->after('sec4_card2_day1_Etime')->nullable();
            $table->string('status_card2_day2',20)->after('sec4_card2_day2_Etime')->nullable();
            $table->string('status_card2_day3',20)->after('sec4_card2_day3_Etime')->nullable();
            $table->string('status_card2_day4',20)->after('sec4_card2_day4_Etime')->nullable();
            $table->string('status_card2_day5',20)->after('sec4_card2_day5_Etime')->nullable();
            $table->string('status_card2_day6',20)->after('sec4_card2_day6_Etime')->nullable();
            $table->string('status_card2_day7',20)->after('sec4_card2_day7_Etime')->nullable();

            $table->string('status_card3_day1',20)->after('sec4_card3_day1_Etime')->nullable();
            $table->string('status_card3_day2',20)->after('sec4_card3_day2_Etime')->nullable();
            $table->string('status_card3_day3',20)->after('sec4_card3_day3_Etime')->nullable();
            $table->string('status_card3_day4',20)->after('sec4_card3_day4_Etime')->nullable();
            $table->string('status_card3_day5',20)->after('sec4_card3_day5_Etime')->nullable();
            $table->string('status_card3_day6',20)->after('sec4_card3_day6_Etime')->nullable();
            $table->string('status_card3_day7',20)->after('sec4_card3_day7_Etime')->nullable();

            $table->string('sec_2_card_1_status',20)->nullable();
            $table->string('sec_2_card_2_status',20)->nullable();
            $table->string('sec_2_card_3_status',20)->nullable();
            $table->string('sec_3_card_1_status',20)->nullable();
            $table->string('sec_3_card_2_status',20)->nullable();
            $table->string('sec_3_card_3_status',20)->nullable();

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
        //     $table->dropp('status');
            
        // });
    }
};

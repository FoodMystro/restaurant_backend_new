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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();

            $table->string('logo');

            $table->text('sec_1_heading')->nullable();
            $table->text('sec_1_paragraph')->nullable();
            $table->text('sec_1_heading1')->nullable();
            $table->text('sec_1_heading2')->nullable();
            $table->text('sec_1_heading3')->nullable();
            $table->string('sec_1_right_img')->nullable();

            $table->text('sec_2_heading')->nullable();
            $table->text('sec_2_paragraph')->nullable();
            $table->string('sec_2_img1')->nullable();
            $table->text('sec_2_heading_1')->nullable();
            $table->text('sec_2_paragraph_1')->nullable();
            $table->string('sec_2_img_2')->nullable();
            $table->text('sec_2_heading_2')->nullable();
            $table->text('sec_2_paragraph_2')->nullable();
            $table->string('sec_2_img_3')->nullable();
            $table->text('sec_2_heading_3')->nullable();
            $table->text('sec_2_paragraph_3')->nullable();

            $table->string('sec3_card1_img1')->nullable();
            $table->text('sec3_card1_heading1')->nullable();
            $table->text('sec3_card1_paragraph1')->nullable();
            $table->string('sec3_card2_img2')->nullable();
            $table->text('sec3_card2_heading2')->nullable();
            $table->text('sec3_card2_paragraph2')->nullable();
            $table->string('sec3_card3_img3')->nullable();
            $table->text('sec3_card3_heading3')->nullable();
            $table->text('sec3_card3_paragraph3')->nullable();
            $table->text('sec3_right_header_heading')->nullable();
            $table->text('sec3_right_header_paragraph')->nullable();
            
            $table->string('sec3_delivery_Stime')->nullable();
            $table->string('sec3_delivery_Etime')->nullable();
           
            $table->string('sec3_collection_Stime')->nullable();
            $table->string('sec3_collection_Etime')->nullable();
            
            $table->string('sec3_right_service_Stime')->nullable();
            $table->string('sec3_table_service_Etime')->nullable();

            $table->text('sec4_header1')->nullable();
            $table->text('sec4_card1_heading_1')->nullable();
            $table->text('sec4_card1_paragraph_1')->nullable();
            $table->text('sec4_card1_heading_2')->nullable();
            $table->text('sec4_card1_day1')->nullable();
            $table->string('sec4_card1_day1_Stime')->nullable();
            $table->string('sec4_card1_day1_Etime')->nullable();
            $table->text('sec4_card1_day2')->nullable();
            $table->string('sec4_card1_day2_Stime')->nullable();
            $table->string('sec4_card1_day2_Etime')->nullable();
            $table->text('sec4_card1_day3')->nullable();
            $table->string('sec4_card1_day3_Stime')->nullable();
            $table->string('sec4_card1_day3_Etime')->nullable();
            $table->text('sec4_card1_day4')->nullable();
            $table->string('sec4_card1_day4_Stime')->nullable();
            $table->string('sec4_card1_day4_Etime')->nullable();
            $table->text('sec4_card1_day5')->nullable();
            $table->string('sec4_card1_day5_Stime')->nullable();
            $table->string('sec4_card1_day5_Etime')->nullable();
            $table->text('sec4_card1_day6')->nullable();
            $table->string('sec4_card1_day6_Stime')->nullable();
            $table->string('sec4_card1_day6_Etime')->nullable();
            $table->text('sec4_card1_day7')->nullable();
            $table->string('sec4_card1_day7_Stime')->nullable();
            $table->string('sec4_card1_day7_Etime')->nullable();

            $table->text('sec4_header2')->nullable();
            $table->text('sec4_card2_heading_1')->nullable();
            $table->text('sec4_card2_paragraph_1')->nullable();
            $table->text('sec4_card2_heading_2')->nullable();
            $table->text('sec4_card2_day1')->nullable();
            $table->string('sec4card2_day1_Stime')->nullable();
            $table->string('sec4_card2_day1_Etime')->nullable();
            $table->text('sec4_card2_day2')->nullable();
            $table->string('sec4_card2_day2_Stime')->nullable();
            $table->string('sec4_card2_day2_Etime')->nullable();
            $table->text('sec4_card2_day3')->nullable();
            $table->string('sec4_card2_day3_Stime')->nullable();
            $table->string('sec4_card2_day3_Etime')->nullable();
            $table->text('sec4_card2_day4')->nullable();
            $table->string('sec4_card2_day4_Stime')->nullable();
            $table->string('sec4_card2_day4_Etime')->nullable();
            $table->text('sec4_card2_day5')->nullable();
            $table->string('sec4_card2_day5_Stime')->nullable();
            $table->string('sec4_card2_day5_Etime')->nullable();
            $table->text('sec4_card2_day6')->nullable();
            $table->string('sec4_card2_day6_Stime')->nullable();
            $table->string('sec4_card2_day6_Etime')->nullable();
            $table->text('sec4_card2_day7')->nullable();
            $table->string('sec4_card2_day7_Stime')->nullable();
            $table->string('sec4_card2_day7_Etime')->nullable();

            $table->text('sec4_header3')->nullable();
            $table->text('sec4_card3_heading_1')->nullable();
            $table->text('sec4_card3_paragraph_1')->nullable();
            $table->text('sec4_card3_heading_2')->nullable();
            $table->text('sec4_card3_day1')->nullable();
            $table->string('sec4_card3_day1_Stime')->nullable();
            $table->string('sec4_card3_day1_Etime')->nullable();
            $table->text('sec4_card3_day2')->nullable();
            $table->string('sec4_card3_day2_Stime')->nullable();
            $table->string('sec4_card3_day2_Etime')->nullable();
            $table->text('sec4_card3_day3')->nullable();
            $table->string('sec4_card3_day3_Stime')->nullable();
            $table->string('sec4_card3_day3_Etime')->nullable();
            $table->text('sec4_card3_day4')->nullable();
            $table->string('sec4_card3_day4_Stime')->nullable();
            $table->string('sec4_card3_day4_Etime')->nullable();
            $table->text('sec4_card3_day5')->nullable();
            $table->string('sec4_card3_day5_Stime')->nullable();
            $table->string('sec4_card3_day5_Etime')->nullable();
            $table->text('sec4_card3_day6')->nullable();
            $table->string('sec4_card3_day6_Stime')->nullable();
            $table->string('sec4_card3_day6_Etime')->nullable();
            $table->text('sec4_card3_day7')->nullable();
            $table->string('sec4_card3_day7_Stime')->nullable();
            $table->string('sec4_card3_day7_Etime')->nullable();

         
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
        Schema::dropIfExists('homes');
    }
};

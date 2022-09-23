<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Help;

class CreateHelpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Help::create([
             'sec1_heading'         => 'Section 1 Heading',
             'sec1_paragraph'       => 'Section 1 Paragraph ...',
             'sec2_heading'         => 'Section 2 Heading',
             'sec2_paragraph'       => 'Section 2 Paragraph ...',
             'sec3_heading'         => 'Section 3 Heading',
             'sec3_paragraph'       => 'Section 3 Paragraph ...',
             'sec3_artical_list'    => 'Section 3 Artical'

        ]);
    }
}

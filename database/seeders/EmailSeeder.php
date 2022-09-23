<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Email;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Email::create([
            'user_name'         => 'user@gmail.com',
             'password'         => '12345678',
             'server_address'   => 'user.com',
             'port_no'          => '123',
             'server'           => 'demo',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'first_name' => 'Gregorius',
                'last_name' => 'Agung',
                'address' => 'Bandungrejosari',
                'city' => 'Sukun',
                'state' => 'Jawa Timur',
                'country' => 'Indonesia',
                'zip_code' => '65148',
                'email_address' => 'agunggregorius845@gmail.com',
                'phone_number' => '085608674014',
                'total_checkout' => 10,
                'status' => 'completed',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'shipping_cost' => 0,
                'shipping_detail' => 'Detail pengiriman contoh',
            ],
            // 
        ]);
    }
}

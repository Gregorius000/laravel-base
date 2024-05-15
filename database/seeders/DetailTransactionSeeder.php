<?php

namespace Database\Seeders;

use App\Models\DetailTransaction;
use Illuminate\Database\Seeder;

class DetailTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailTransaction::create([
            'product_id' => 4,
            'transaction_id' => 2,
        ]);
    }
}
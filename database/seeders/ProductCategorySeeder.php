<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_categories')->insert([
            ['name' => 'Product 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product 2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product 3', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product 4', 'created_at' => now(), 'updated_at' => now()],
            //
        ]);
    }
}

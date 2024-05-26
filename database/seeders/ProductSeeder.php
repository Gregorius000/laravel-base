<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Sample Product 1',
                'description' => 'This is a product 1',
                'image' => 'path/to/image2.jpg',
                'price' => 100,
                'slug' => Str::slug('Product 1'),
                'product_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 2',
                'description' => 'This is a product 2',
                'image' => 'path/to/image2.jpg',
                'price' => 100,
                'slug' => Str::slug('Product 2'),
                'product_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 3',
                'description' => 'This is a product 3',
                'image' => 'path/to/image2.jpg',
                'price' => 150,
                'slug' => Str::slug('Product 3'),
                'product_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 4',
                'description' => 'This is a product 4',
                'image' => 'path/to/image2.jpg',
                'price' => 150,
                'slug' => Str::slug('Product 4'),
                'product_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //
        ]);
    }
}

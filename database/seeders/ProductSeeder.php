<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => '1',
            'title' => 'Converse',
            'price' => '49.50',
            'stock' => '50'
        ]);

        Product::create([
            'category_id' => '1',
            'title' => 'Dress',
            'price' => '49.50',
            'stock' => '50'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan beberapa produk ke dalam database
        Product::create([
            'name' => 'Krim Skinspire',
            'price' => 100000,
            'stock' => 50,
            'image' => 'images/products/krim-skinspire.jpg',
        ]);

        Product::create([
            'name' => 'Serum Skinspire',
            'price' => 120000,
            'stock' => 30,
            'image' => 'images/products/serum-skinspire.jpg',
        ]);

        Product::create([
            'name' => 'Masker Skinspire',
            'price' => 80000,
            'stock' => 40,
            'image' => 'images/products/masker-skinspire.jpg',
        ]);

        Product::create([
            'name' => 'Lulur Skinspire',
            'price' => 95000,
            'stock' => 20,
            'image' => 'images/products/lulur-skinspire.jpg',
        ]);

        Product::create([
            'name' => 'Sunscreen Skinspire',
            'price' => 110000,
            'stock' => 60,
            'image' => 'images/products/sunscreen-skinspire.jpg',
        ]);
    }
}

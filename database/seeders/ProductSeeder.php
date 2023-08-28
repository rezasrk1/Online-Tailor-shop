<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description of Product 1',
                'price' => 29.99,
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTg5xR2AsoRaJ-t1SYMGjZevyXsEzBZfeynA&usqp=CAU',
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description of Product 2',
                'price' => 39.99,
                'image_url' => 'https://example.com/product2.jpg',
            ],
            // Add other products here
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}

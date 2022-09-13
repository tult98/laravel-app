<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::factory()->create([
            "name" => "Product 01",
            "description" => "This is a super cool product you've ever seen!!!",
            "price" => 100000,
        ]);
    }
}

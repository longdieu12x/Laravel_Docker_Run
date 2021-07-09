<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::insert([
            ['name' => 'Mu luoi trai', 'description' => 'Mu luoi trai dep', 'category_id' => 6],
            ['name' => 'Quan tay', 'description' => 'Quan tay dep', 'category_id' => 1],
            ['name' => 'Ao thun', 'description' => 'Ao thun dep', 'category_id' => 2],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::insert([
            ['name' => 'Quan'],
            ['name' => 'Ao'],
            ['name' => 'That lung'],
            ['name' => 'Dong ho'],
            ['name' => 'Giay'],
            ['name' => 'Mu'],
        ]);
    }
}

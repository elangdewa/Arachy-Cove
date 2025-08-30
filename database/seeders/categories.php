<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'T-Shirt'],
            ['id' => 2, 'name' => 'Hoodie'],
            ['id' => 3, 'name' => 'Jacket'],
            ['id' => 4, 'name' => 'Pants'],
            ['id' => 5, 'name' => 'Accessories'],
        ]);
    }
}

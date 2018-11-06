<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert(['name' => 'LaptopsChina']);
      DB::table('categories')->insert(['name' => 'Smartphones']);
      DB::table('categories')->insert(['name' => 'Cameras']);
      DB::table('categories')->insert(['name' => 'Accessories ']);
      DB::table('categories')->insert(['name' => 'LaptopsUsa']);
      DB::table('categories')->insert(['name' => 'Mobile']);
    }
}

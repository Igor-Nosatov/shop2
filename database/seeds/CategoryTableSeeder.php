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
      DB::table('categories')->insert(['name' => 'LaptopsChina', 'image' => '/img/shop01.png']);
      DB::table('categories')->insert(['name' => 'Smartphones', 'image' => '/img/shop02.png' ]);
      DB::table('categories')->insert(['name' => 'Cameras', 'image' => '/img/shop03.png' ]);
      DB::table('categories')->insert(['name' => 'Accessories ', 'image' => '/img/shop01.png' ]);
      DB::table('categories')->insert(['name' => 'LaptopsUsa', 'image' => '/img/shop02.png' ]);
      DB::table('categories')->insert(['name' => 'Mobile', 'image' => '/img/shop03.png']);
    }
}

<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          'name' => 'Red X8',
          'price' => 120,
          'description' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'image' => '/img/product01.png',
          'categories_id'=> 1,
          'brands_id' => 1
        ]);
        DB::table('products')->insert([
          'name' => 'Red X8',
          'price' => 120,
          'description' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'image' => '/img/product02.png',
          'categories_id'=> 2,
          'brands_id' => 2
        ]);
        DB::table('products')->insert([
          'name' => 'Red X8',
          'price' => 980,
          'description' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'image' => '/img/product03.png',
          'categories_id'=> 3,
          'brands_id' => 3
        ]);
        DB::table('products')->insert([
          'name' => 'Red X8',
          'price' => 280,
          'description' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'image' => '/img/product04.png',
          'categories_id'=> 4,
          'brands_id' => 4
        ]);
        DB::table('products')->insert([
          'name' => 'Red X5',
          'price' => 380,
          'description' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'image' => '/img/product05.png',
          'categories_id'=> 5,
          'brands_id' => 5
        ]);
        DB::table('products')->insert([
          'name' => 'Red X8',
          'price' => 560,
          'description' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'image' => '/img/product06.png',
          'categories_id'=> 6,
          'brands_id' => 6
        ]);
        DB::table('products')->insert([
          'name' => 'Red X8',
          'price' => 380,
          'description' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'image' => '/img/product07.png',
          'categories_id'=> 1,
          'brands_id' => 1
        ]);
        DB::table('products')->insert([
          'name' => 'Red X8',
          'price' => 780,
          'description' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'image' => '/img/product08.png',
          'categories_id'=> 2,
          'brands_id' => 2
        ]);
        DB::table('products')->insert([
          'name' => 'Red X8',
          'price' => 900,
          'description' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'image' => '/img/product09.png',
          'categories_id'=> 3,
          'brands_id' => 3
        ]);
    }
}

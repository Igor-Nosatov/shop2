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
          'category_id' => 1,
          'brand_id' => 6
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
          'category_id' => 1,
          'brand_id' => 5
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
          'category_id' => 1,
          'brand_id' => 3
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
          'category_id' => 1,
          'brand_id' => 3
        
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
          'category_id' => 1,
          'brand_id' => 2
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
          'category_id' => 1,
          'brand_id' => 1
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
          'category_id' => 2,
          'brand_id' => 6
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
          'category_id' => 2,
          'brand_id' => 5
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
          'category_id' => 2,
          'brand_id' => 4
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
          'category_id' => 2,
          'brand_id' => 3
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
          'category_id' => 2,
          'brand_id' => 2
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
          'category_id' => 2,
          'brand_id' => 1
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
          'category_id' => 3,
          'brand_id' => 3
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
          'category_id' => 3,
          'brand_id' => 5
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
          'image' => '/img/product02.png',
          'category_id' => 3,
          'brand_id' => 1
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
          'image' => '/img/product03.png',
          'category_id' => 3,
          'brand_id' => 6
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
          'image' => '/img/product01.png',
          'category_id' => 3,
          'brand_id' => 2
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
          'image' => '/img/product04.png',
          'category_id' => 3,
          'brand_id' => 1

        ]);
    }
}

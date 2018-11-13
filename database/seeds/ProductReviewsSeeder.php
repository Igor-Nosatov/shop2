<?php

use Illuminate\Database\Seeder;

class ProductReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_reviews')->insert([
          'user' => 'Igor',
          'email' => 'admin@gmail.com',
          'review' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'products_id' => 1,
          'rating' => 1
        ]);
        DB::table('product_reviews')->insert([
          'user' => 'Igor',
          'email' => 'admin@gmail.com',
          'review' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'products_id' => 1,
          'rating' => 2
        ]);
        DB::table('product_reviews')->insert([
          'user' => 'Igor',
          'email' => 'admin@gmail.com',
          'review' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'products_id' => 1,
          'rating' => 3
        ]);
        DB::table('product_reviews')->insert([
          'user' => 'Igor',
          'email' => 'admin@gmail.com',
          'review' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'products_id' => 1,
          'rating' => 4
        ]);
        DB::table('product_reviews')->insert([
          'user' => 'Igor',
          'email' => 'admin@gmail.com',
          'review' => 'Lorem ipsum dolor sit amet,
           consectetur adipisicing elit,
           sed do eiusmod tempor incididunt ut labore et
           dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.',
          'products_id' => 1,
          'rating' => 5
        ]);
    }
}

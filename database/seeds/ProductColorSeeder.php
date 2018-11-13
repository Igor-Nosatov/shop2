<?php

use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              DB::table('color_product')->insert([
         	'product_id' => '1',
            'color_id' => '2'
         ]);
         DB::table('color_product')->insert([
         	'product_id' => '1',
            'color_id' => '3'
         ]);
         DB::table('color_product')->insert([
         	'product_id' => '1',
            'color_id' => '4'
         ]);
         DB::table('color_product')->insert([
         	'product_id' => '1',
            'color_id' => '1'
         ]);
         DB::table('color_product')->insert([
         	'product_id' => '1',
            'color_id' => '5'
         ]);
         DB::table('color_product')->insert([
         	'product_id' => '2',
            'color_id' => '1'
         ]);

          DB::table('color_product')->insert([
         	'product_id' => '2',
            'color_id' => '2'
         ]);
         DB::table('color_product')->insert([
         	'product_id' => '2',
            'color_id' => '3'
         ]);
         DB::table('color_product')->insert([
         	'product_id' => '2',
            'color_id' => '4'
         ]);
         DB::table('color_product')->insert([
         	'product_id' => '2',
            'color_id' => '1'
         ]);
         DB::table('color_product')->insert([
         	'product_id' => '2',
            'color_id' => '5'
         ]);
    }
}

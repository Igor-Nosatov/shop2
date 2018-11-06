<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('brands')->insert(['name' => 'Samsung']);
      DB::table('brands')->insert(['name' => 'LG']);
      DB::table('brands')->insert(['name' => 'Sony']);
      DB::table('brands')->insert(['name' => 'Huawei']);
      DB::table('brands')->insert(['name' => 'Xiomi']);
      DB::table('brands')->insert(['name' => 'Acer']);
    }
}

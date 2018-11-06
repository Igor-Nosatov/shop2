<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sizes')->insert(['name' => '16']);
      DB::table('sizes')->insert(['name' => '18']);
      DB::table('sizes')->insert(['name' => '20']);
    }
}

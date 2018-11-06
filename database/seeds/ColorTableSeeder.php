<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('colors')->insert(['name' => 'Red']);
      DB::table('colors')->insert(['name' => 'Grey']);
      DB::table('colors')->insert(['name' => 'Black']);
    }
}

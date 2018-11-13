<?php

use Illuminate\Database\Seeder;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert(['name' => 'red']);
        DB::table('colors')->insert(['name' => 'pink']);
        DB::table('colors')->insert(['name' => 'brownL']);
        DB::table('colors')->insert(['name' => 'grey']);
        DB::table('colors')->insert(['name' => 'black']);
    }
}

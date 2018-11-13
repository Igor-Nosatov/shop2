<?php

use Illuminate\Database\Seeder;

class SizeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert(['name' => 'M']);
        DB::table('sizes')->insert(['name' => 'L']);
        DB::table('sizes')->insert(['name' => 'XL']);
        DB::table('sizes')->insert(['name' => 'XXL']);
        DB::table('sizes')->insert(['name' => 'XXXL']);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(SizeProductSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(ProductReviewsSeeder::class);
        $this->call(ProductSizeSeeder::class);
        $this->call(ProductColorSeeder::class);
     
        
    }
}

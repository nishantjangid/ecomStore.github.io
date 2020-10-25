<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Google Pixle 4a',
                'price'=>'349',
                'description'=>'Smartphone with the 8gb ram and amoled screen',
                'category'=>'mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/71Q8gm97H8L._AC_UY218_.jpg',           
            ],
            [
                'name'=>'One Plus 8 pro',
                'price'=>'200',
                'description'=>'Smartphone with the 12gb ram and Fluid Display',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/410mmBW-AYL._AC_.jpg',           
            ],
            [
                'name'=>'Samsung Galaxy S20',
                'price'=>'699',
                'description'=>'128 GB | US Version Smartphone | Pro-Grade Camera, 30X Space Zoom, Night Mode | Cloud Mint Green',
                'category'=>'mobile',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71ZcQSRCqBL._AC_SL1500_.jpg',           
            ]
        ]);        
    }
}

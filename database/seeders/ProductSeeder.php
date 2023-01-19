<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
                "name" => "Realme 9pro",
                "price" =>"18000",
                "discription"=>"a smartphone with 5G connectivity and more",
                "category" =>"Mobile",
                "gallery" =>"https://static.c.realme.com/IN/wm-thread/1500407167356887040.png"
            ],
             [
                "name" => "Samsung Tv",
                "price" =>"12000",
                "discription"=>"a Tv with More features",
                "category" =>"TV",
                "gallery" =>"https://i.gadgets360cdn.com/products/televisions/large/1548155083_832_samsung_75-inch-led-ultra-hd-4k-tv-75nu8000.jpg?downsize=*:420&output-quality=80"
             ],
             [
                "name" => "LG TV",
                "price" =>"30000",
                "discription"=>"A tv with Android Connectivity",
                "category" =>"Tv",
                "gallery" =>"https://www.lg.com/in/images/tvs/md07554883/gallery/55UQ7500PSF-DZ-01-v1.jpg"
             ],
             [
                "name" => "Fridge",
                "price" =>"10000",
                "discription"=>"a fridge with extra colling features",
                "category" =>"Fridge",
                "gallery" =>"https://www.lg.com/in/images/refrigerators/md07555283/gallery/GL-S382SPZY-Refrigerators-Front-View-DZ-01.jpg"
             ]
        ]);
    }
}

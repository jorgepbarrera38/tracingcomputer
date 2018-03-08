<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Brand::create([
            'name' => 'No especificado'//1
        ]);
        \App\Brand::create([
            'name' => 'Lenovo'//2
        ]);
        \App\Brand::create([
            'name' => 'HP' //3
        ]);
        \App\Brand::create([
            'name' => 'Samsung' //4
        ]);
        \App\Brand::create([
            'name' => 'TP-Link' //5
        ]);
        \App\Brand::create([
            'name' => 'Clon' //6
        ]);
        \App\Brand::create([
            'name' => 'Acer' //7
        ]);
        \App\Brand::create([
            'name' => 'PC-Smart' //8
        ]);
        \App\Brand::create([
            'name' => 'Toshiba' //9
        ]);
        \App\Brand::create([
            'name' => 'Dell' //10
        ]);
        \App\Brand::create([
            'name' => 'Janus' //11
        ]);
    }
}

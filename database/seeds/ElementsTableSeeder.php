<?php

use Illuminate\Database\Seeder;
use App\Element;

class ElementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Element::create([
            'name' => 'Equipo de computación'
        ]);
    }
}

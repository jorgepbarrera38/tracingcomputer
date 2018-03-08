<?php

use Illuminate\Database\Seeder;
use App\Ubication;

class UbicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ubication::create([
            'name' => 'Unidad San José'
        ]);
        Ubication::create([
            'name' => 'Granja'
        ]);
        Ubication::create([
            'name' => 'Divino niño'
        ]);
        Ubication::create([
            'name' => 'UEN El Retorno'
        ]);
        Ubication::create([
            'name' => 'UEN Calamar'
        ]);
        Ubication::create([
            'name' => 'UEN Miraflores'
        ]);
    }
}

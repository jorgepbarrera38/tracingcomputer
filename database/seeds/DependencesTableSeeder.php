<?php

use Illuminate\Database\Seeder;
use App\Dependence;

class DependencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dependence::create([
            'name' => 'Sistemas'
        ]);
        Dependence::create([
            'name' => 'Contabilidad'
        ]);
        Dependence::create([
            'name' => 'Presupuesto'
        ]);
        Dependence::create([
            'name' => 'Cartera'
        ]);
        Dependence::create([
            'name' => 'Facturación'
        ]);
        Dependence::create([
            'name' => 'Tesorería'
        ]);
        Dependence::create([
            'name' => 'Almacén'
        ]);
        Dependence::create([
            'name' => 'Salud ocupacional'
        ]);
        Dependence::create([
            'name' => 'Citas'
        ]);
        Dependence::create([
            'name' => 'Jurídica'
        ]);
        Dependence::create([
            'name' => 'Planeación'
        ]);
        Dependence::create([
            'name' => 'Auditoría de cuentas médicas'
        ]);
        Dependence::create([
            'name' => 'Control interno de gestión'
        ]);
        Dependence::create([
            'name' => 'Control interno disciplinario'
        ]);
        Dependence::create([
            'name' => 'Farmacia'
        ]);
        Dependence::create([
            'name' => 'Científico técnico'
        ]);
        Dependence::create([
            'name' => 'Referencia'
        ]);
        Dependence::create([
            'name' => 'Talento humano'
        ]);
        Dependence::create([
            'name' => 'Atención al usuario'
        ]);
        Dependence::create([
            'name' => 'Archivo'
        ]);
        Dependence::create([
            'name' => 'Saneamiento'
        ]);
        Dependence::create([
            'name' => 'Gestión de mantenimiento hospitalario'
        ]);
        Dependence::create([
            'name' => 'PYP'
        ]);
        Dependence::create([
            'name' => 'Programas especiales'
        ]);
        Dependence::create([
            'name' => 'Oficina técnico UEN'
        ]);
        Dependence::create([
            'name' => 'Servicios Amigables en Salud'
        ]);
        Dependence::create([
            'name' => 'Vacunación'
        ]);
        Dependence::create([
            'name' => 'Tuberculosis'
        ]);
        Dependence::create([
            'name' => 'Rayos X'
        ]);
        Dependence::create([
            'name' => 'Odontología'
        ]);
        Dependence::create([
            'name' => '4505'
        ]);
        Dependence::create([
            'name' => 'Laboratorio'
        ]);
        Dependence::create([
            'name' => 'Subgerencia'
        ]);
        Dependence::create([
            'name' => 'Urgencias'
        ]);
    }
}

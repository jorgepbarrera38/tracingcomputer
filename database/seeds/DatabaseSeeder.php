<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandsTableSeeder::class);
        $this->call(FuncionariesTableSeeder::class);
        $this->call(UbicationsTableSeeder::class);
        $this->call(DependencesTableSeeder::class);
        $this->call(ElementsTableSeeder::class);
        $this->call(DevicesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

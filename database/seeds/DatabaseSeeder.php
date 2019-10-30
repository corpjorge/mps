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
        $this->call([RolesTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([PrimSemProgramaTableSeeder::class]);
        $this->call([PrimSemMateriaTableSeeder::class]);
        $this->call([PrimSemGrupoTableSeede::class]);
        $this->call([PrimSemGrupoMateriaTableSeeder::class]);

    }
}

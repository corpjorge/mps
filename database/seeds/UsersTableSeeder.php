<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jorge Peralta',
            'email' => 'je.peralta@uniandes.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('111111'),
            'rol_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'nombre'=>'admin',
        'email'=> 'admin@admin.com',
        'password'=>Hash::make('admin'),
        'rol' => 'admin'
      ]);

      DB::table('users')->insert([
        'nombre'=>'profe1',
        'email'=> 'profe1@profe1.com',
        'password'=>Hash::make('profe1'),
        'rol' => 'monitor'
      ]);

      DB::table('users')->insert([
        'nombre'=>'usu1',
        'email'=> 'usu1@usu1.com',
        'password'=>Hash::make('usu1'),
        'rol' => 'usuario'
      ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\clase;
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
        'apellidos'=> 'admin',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'admin@admin.com',
        'password'=>Hash::make('admin'),
        'encriptedPass'=>Crypt::encrypt('admin'),
        'rol' => 'admin'
      ]);

      DB::table('users')->insert([
        'nombre'=>'profe1',
        'apellidos'=> 'profe1',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'profe1@profe1.com',
        'password'=>Hash::make('profe1'),
        'encriptedPass'=>Crypt::encrypt('profe1'),
        'rol' => 'monitor'
      ]);
      DB::table('users')->insert([
        'nombre'=>'Carlos',
        'apellidos'=> 'Lopez Pisuegra',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'Carlosmoni@correo.com',
        'password'=>Hash::make('carlos'),
        'encriptedPass'=>Crypt::encrypt('carlos'),
        'rol' => 'monitor'
      ]);

      DB::table('users')->insert([
        'nombre'=>'Eustaquio',
        'apellidos'=> 'Ramirez Conde',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'Eustaquiomoni@correo.com',
        'password'=>Hash::make('eustaquio'),
        'encriptedPass'=>Crypt::encrypt('eustaquio'),
        'rol' => 'monitor'
      ]);
      DB::table('users')->insert([
        'nombre'=>'Claudia',
        'apellidos'=> 'Campos Bolsa',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'Claudiamoni@correo.com',
        'password'=>Hash::make('claudia'),
        'encriptedPass'=>Crypt::encrypt('claudia'),
        'rol' => 'monitor'
      ]);

      DB::table('users')->insert([
        'nombre'=>'usu1',
        'apellidos'=> 'usu1',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email'=> 'usu1@usu1.com',
        'password'=>Hash::make('usu1'),
        'encriptedPass'=>Crypt::encrypt('usu1'),
        'rol' => 'usuario'
      ]);

      DB::table('users')->insert([
        'nombre'=>'Juan',
        'apellidos'=> 'Ramirez Gonzalez',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'Juanusuario@correo.com',
        'password'=>Hash::make('juan'),
        'encriptedPass'=>Crypt::encrypt('juan'),
        'rol' => 'usuario'
      ]);

      DB::table('users')->insert([
        'nombre'=>'Francisco',
        'apellidos'=> 'Zamora Ibañez',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'Franciscousuario@correo.com',
        'password'=>Hash::make('francisco'),
        'encriptedPass'=>Crypt::encrypt('francisco'),
        'rol' => 'usuario'
      ]);
      DB::table('users')->insert([
        'nombre'=>'Lucia',
        'apellidos'=> 'Olivos Soria',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'Luciausuario@correo.com',
        'password'=>Hash::make('lucia'),
        'encriptedPass'=>Crypt::encrypt('lucia'),
        'rol' => 'usuario'
      ]);

      DB::table('users')->insert([
        'nombre'=>'Belen',
        'apellidos'=> 'Hidalgo Sanchez',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email'=> 'Belenusuario@correo.com',
        'password'=>Hash::make('belen'),
        'encriptedPass'=>Crypt::encrypt('belen'),
        'rol' => 'usuario'
      ]);

      $this->call([
          ClaseSeeder::class
        ]);

        $this->call([
            EntrenamientoSeeder::class
          ]);
          $this->call([
              SeapuntanSeeder::class
            ]);
    }
}

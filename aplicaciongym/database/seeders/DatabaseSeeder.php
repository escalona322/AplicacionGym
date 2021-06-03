<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        'rol' => 'admin'
      ]);

      DB::table('users')->insert([
        'nombre'=>'profe1',
        'apellidos'=> 'profe1',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'profe1@profe1.com',
        'password'=>Hash::make('profe1'),
        'rol' => 'monitor'
      ]);
      DB::table('users')->insert([
        'nombre'=>'profe2',
        'apellidos'=> 'profe2',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'profe2@profe2.com',
        'password'=>Hash::make('profe2'),
        'rol' => 'monitor'
      ]);

      DB::table('users')->insert([
        'nombre'=>'profe3',
        'apellidos'=> 'profe3',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'profe3@profe3.com',
        'password'=>Hash::make('profe3'),
        'rol' => 'monitor'
      ]);
      DB::table('users')->insert([
        'nombre'=>'profe4',
        'apellidos'=> 'profe4',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'profe4@profe4.com',
        'password'=>Hash::make('profe4'),
        'rol' => 'monitor'
      ]);

      DB::table('users')->insert([
        'nombre'=>'usu1',
        'apellidos'=> 'usu1',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email'=> 'usu1@usu1.com',
        'password'=>Hash::make('usu1'),
        'rol' => 'usuario'
      ]);

      DB::table('users')->insert([
        'nombre'=>'usu2',
        'apellidos'=> 'usu2',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'usu2@usu2.com',
        'password'=>Hash::make('usu2'),
        'rol' => 'usuario'
      ]);

      DB::table('users')->insert([
        'nombre'=>'usu3',
        'apellidos'=> 'usu3',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'usu3@usu3.com',
        'password'=>Hash::make('usu3'),
        'rol' => 'usuario'
      ]);
      DB::table('users')->insert([
        'nombre'=>'usu4',
        'apellidos'=> 'usu4',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email' => 'usu4@usu4.com',
        'password'=>Hash::make('usu4'),
        'rol' => 'usuario'
      ]);

      DB::table('users')->insert([
        'nombre'=>'usu5',
        'apellidos'=> 'usu5',
        'DNI' => '00000000Z',
        'pagado' => 'si',
        'email'=> 'usu5@usu5.com',
        'password'=>Hash::make('usu5'),
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

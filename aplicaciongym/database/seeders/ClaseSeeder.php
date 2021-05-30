<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       //turno 1
       DB::table('clases')->insert([
         'nombre'=>'Yoga',
         'aforo'=> 20,
         'duracion' => 20,
         'dia' => 'Lunes',
         'turno' => '1',
         'user_id' => 3
       ]);
       DB::table('clases')->insert([
         'nombre'=>'Pilates',
         'aforo'=> 20,
         'duracion' => 20,
         'dia' => 'Martes',
         'turno' => '1',
         'user_id' => 3
       ]);
       DB::table('clases')->insert([
         'nombre'=>'AquaGym',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Miercoles',
         'turno' => '1',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'Ciclo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Jueves',
         'turno' => '1',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'PAblo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Viernes',
         'turno' => '1',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'PAblo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Sabado',
         'turno' => '1',
         'user_id' => 2
       ]);

       //turno 2
       DB::table('clases')->insert([
         'nombre'=>'Yoga',
         'aforo'=> 20,
         'duracion' => 20,
         'dia' => 'Lunes',
         'turno' => '2',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'Pilates',
         'aforo'=> 20,
         'duracion' => 20,
         'dia' => 'Martes',
         'turno' => '2',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'AquaGym',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Miercoles',
         'turno' => '2',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'Ciclo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Jueves',
         'turno' => '2',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'PAblo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Viernes',
         'turno' => '2',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'PAblo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Sabado',
         'turno' => '2',
         'user_id' => 2
       ]);

       //turno 3
       DB::table('clases')->insert([
         'nombre'=>'Yoga',
         'aforo'=> 20,
         'duracion' => 20,
         'dia' => 'Lunes',
         'turno' => '3',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'Pilates',
         'aforo'=> 20,
         'duracion' => 20,
         'dia' => 'Martes',
         'turno' => '3',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'AquaGym',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Miercoles',
         'turno' => '3',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'Ciclo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Jueves',
         'turno' => '3',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'PAblo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Viernes',
         'turno' => '3',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'PAblo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Sabado',
         'turno' => '3',
         'user_id' => 2
       ]);

       //turno 4
       DB::table('clases')->insert([
         'nombre'=>'Yoga',
         'aforo'=> 20,
         'duracion' => 20,
         'dia' => 'Lunes',
         'turno' => '4',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'Pilates',
         'aforo'=> 20,
         'duracion' => 20,
         'dia' => 'Martes',
         'turno' => '4',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'AquaGym',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Miercoles',
         'turno' => '4',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'Ciclo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Jueves',
         'turno' => '4',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'PAblo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Viernes',
         'turno' => '4',
         'user_id' => 2
       ]);
       DB::table('clases')->insert([
         'nombre'=>'PAblo',
         'aforo'=> 20,
         'duracion' => 60,
         'dia' => 'Sabado',
         'turno' => '4',
         'user_id' => 2
       ]);


     }

}

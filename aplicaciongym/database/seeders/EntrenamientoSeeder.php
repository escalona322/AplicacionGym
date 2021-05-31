<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class EntrenamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('entrenamientos')->insert([
        'intensidad'=>'media',
        'tipo' => 'Low',
        'nombre' => 'Sentadillas',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '101',
        'user_id' => '2'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'alta',
        'tipo' => 'Low',
        'nombre' => 'Pistol squat',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=> 'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '102',
        'user_id' => '2'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Low',
        'nombre' => 'Zancadas',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '103',
        'user_id' => '2'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'media',
        'tipo' => 'Low',
        'nombre' => 'Patadas de burro',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '104',
        'user_id' => '2'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'alta',
        'tipo' => 'Low',
        'nombre' => 'Saltos de rana',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '105',
        'user_id' => '2'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=> 'media',
        'tipo' => 'Cardio',
        'nombre' => 'Saltos Laterales',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
          'Kcalorias' => '106',
        'user_id' => '2'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Cardio',
        'nombre' => 'Footing',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '107',
        'user_id' => '2'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'alta',
        'tipo' => 'Cardio',
        'nombre' => 'Burpess',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '108',
        'user_id' => '2'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'media',
        'tipo' => 'Upper',
        'nombre' => '',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '109',
        'user_id' => '3'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'media',
        'tipo' => 'Upper',
        'nombre' => 'Desplazamiento lateral en posición de plancha',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '110',
        'user_id' => '3'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'alta',
        'tipo' => 'Upper',
        'nombre' => 'Flexiones pino',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '111',
        'user_id' => '3'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'media',
        'tipo' => 'Upper',
        'nombre' => 'Flexiones diamante',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '112',
        'user_id' => '3'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Upper',
        'nombre' => 'Dolphin push ups',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '113',
        'user_id' => '3'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Upper',
        'nombre' => 'Superman',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '114',
        'user_id' => '3'
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Upper',
        'nombre' => 'Flutter kicks',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/embed/Yw86UcprH1M',
        'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
        'Kcalorias' => '115',
        'user_id' => '2'
      ]);

    }
}

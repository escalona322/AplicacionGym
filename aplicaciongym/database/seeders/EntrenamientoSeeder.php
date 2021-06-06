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
        'descripcion' => 'Doblar las rodillas hacia debajo , sin pasar las rodillas por delante de la punta de los pies.',
        'Kcalorias' => '101',
        'user_id' => 2
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'alta',
        'tipo' => 'Low',
        'nombre' => 'Pistol squat',
        'repeticiones' => '12',
        'series' => '2',
        'videoyt'=> 'https://www.youtube.com/watch?v=Hh2hIJDGCz8',
        'descripcion' => 'consiste en realizar una sentadilla, pero con la dificultad añadida de apoyar únicamente una pierna en el suelo, la cual debe moverse para descender y elevar todo el cuerpo.',
        'Kcalorias' => '120',
        'user_id' => 2
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Low',
        'nombre' => 'Zancadas',
        'repeticiones' => '10',
        'series' => '4',
        'videoyt'=>'https://www.youtube.com/watch?v=rUXE5JmNrKI',
        'descripcion' => 'Nos colocamos de pie, con las piernas abiertas al mismo ancho que los hombros. Damos un paso hacia delante con una pierna, flexionándola en ángulo de 90º y apoyando el pie delantero completamente sobre el suelo. La pierna trasera tiene que mantenerse en el sitio doblándose hasta casi llegar al suelo',
        'Kcalorias' => '150',
        'user_id' => 2
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'media',
        'tipo' => 'Low',
        'nombre' => 'Patadas de burro',
        'repeticiones' => '15',
        'series' => '4',
        'videoyt'=>'https://www.youtube.com/watch?v=bxsjX_aRSaY',
        'descripcion' => 'Ponte a cuatro patas con las rodillas lado a lado, debajo de las caderas. Baja el torso doblando los codos. Levanta la pierna derecha totalmente recta, tan alta como se posible sin doblar la rodilla. Finalmente Lleva la pierna hacia abajo y repite de 15 a 20 veces con cada pierna.',
        'Kcalorias' => '135',
        'user_id' => 2
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'alta',
        'tipo' => 'Low',
        'nombre' => 'Saltos de rana',
        'repeticiones' => '10',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/watch?v=2eWtmRQdv88',
        'descripcion' => 'Apunte las rodillas en la misma dirección que los pies y agáchese lo más bajo que pueda sin dejar que las rodillas pasen de los dedos de los pies. Siéntese en sus talones y salte con los brazos hacia atrás. Aterrice suavemente sobre los dedos de los pies y exhale mientras se pone en cuclillas.',
        'Kcalorias' => '155',
        'user_id' => 2
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=> 'media',
        'tipo' => 'Cardio',
        'nombre' => 'Saltos Laterales',
        'repeticiones' => '25',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/watch?v=1mStIPjEYqA',
        'descripcion' => 'Ponte de pie con los pies juntos, las rodillas ligeramente flexionadas, al igual que los codos en un ángulo de 90º y las manos delante del torso. Da un salto a la izquierda cayendo únicamente con el pie de este costado y luego haz lo mismo hacia la derecha.',
          'Kcalorias' => '320',
        'user_id' => 2
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Cardio',
        'nombre' => 'Footing',
        'repeticiones' => '50',
        'series' => '1',
        'videoyt'=>'https://www.youtube.com/watch?v=qap5Z1GfTW0',
        'descripcion' => 'Carrera continua de larga distancia pero a ritmo moderado y constante.',
        'Kcalorias' => '400',
        'user_id' => 2
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'alta',
        'tipo' => 'Cardio',
        'nombre' => 'Burpess',
        'repeticiones' => '10',
        'series' => '2',
        'videoyt'=>'https://www.youtube.com/watch?v=IYusabTdFEo',
        'descripcion' => 'se parte de una posición inicial en cuclillas (o sentadillas), se colocan las manos en el suelo y se mantiene la cabeza erguida. Después se desplazan las piernas hacia atrás con los pies juntos y se hace una flexión de pecho (también conocida como flexión de codos).',
        'Kcalorias' => '108',
        'user_id' => 2
      ]);



      DB::table('entrenamientos')->insert([
        'intensidad'=>'media',
        'tipo' => 'Upper',
        'nombre' => 'Desplazamiento lateral en posición de plancha',
        'repeticiones' => '10',
        'series' => '2',
        'videoyt'=>'https://www.youtube.com/watch?v=uGPINUVsRkI',
        'descripcion' => 'Primero de todo coloca la esterilla en el suelo y lateralmente en ella. Apoya una mano en la esterilla y la otra enganchada al cuerpo, luego elévate hasta que tengas un brazo y los pies sobre el suelo. 2. El brazo que has colocado sobre la esterilla tienes que flexionarlo y los pies deben de estar juntos.',
        'Kcalorias' => '350',
        'user_id' => 3
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'alta',
        'tipo' => 'Upper',
        'nombre' => 'Flexiones pino',
        'repeticiones' => '15',
        'series' => '4',
        'videoyt'=>'https://www.youtube.com/watch?v=T5E-qvzBjYc',
        'descripcion' => 'Colocaremos ambas manos en el suelo a la anchura de los hombros y metiendo la cabeza para dentro de nuestro cuerpo y con el abdomen firme, nos propulsaremos con las piernas hasta que tengamos las piernas y los brazos totalmente extendidos.',
        'Kcalorias' => '250',
        'user_id' => 3
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'media',
        'tipo' => 'Upper',
        'nombre' => 'Flexiones diamante',
        'repeticiones' => '15',
        'series' => '4',
        'videoyt'=>'https://www.youtube.com/watch?v=wgpEj-jSq3A',
        'descripcion' => 'Colocamos las manos en forma de diamante y bajamos haciendo una flexion hasta tocar las manos con el pecho.',
        'Kcalorias' => '275',
        'user_id' => 3
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Upper',
        'nombre' => 'Dolphin push ups',
        'repeticiones' => '15',
        'series' => '3',
        'videoyt'=>'https://www.youtube.com/watch?v=V5JLXeNGvhg',
        'descripcion' => 'Los hombros deben bajar hasta quedar cerca de las muñecas y la barbilla debe posicionarse más allá de las manos que se encuentran en el suelo.',
        'Kcalorias' => '250',
        'user_id' => 3
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Upper',
        'nombre' => 'Superman',
        'repeticiones' => '10',
        'series' => '2',
        'videoyt'=>'https://www.youtube.com/watch?v=TwXPklkR8ws',
        'descripcion' => 'Para hacer las flexiones de superman, nos deberemos tumbarnos boca abajo con los brazos por encima de la cabeza y las piernas rectas. A continuación, pondremos las manos en el suelo y los pies juntos con las puntas apoyadas.',
        'Kcalorias' => '350',
        'user_id' => 3
      ]);

      DB::table('entrenamientos')->insert([
        'intensidad'=>'baja',
        'tipo' => 'Upper',
        'nombre' => 'Flutter kicks',
        'repeticiones' => '14',
        'series' => '2',
        'videoyt'=>'https://www.youtube.com/watch?v=ANVdMDaYRts',
        'descripcion' => 'Hay que despegar del suelo los pies y la cabeza, y para ello hay que contraer el abdomen. Con las piernas se realizará un aleteo vertical, en donde se subirán y bajarán las los pies de forma simultánea y alternada sin que en ningún toquen el suelo.',
        'Kcalorias' => '275',
        'user_id' => 2
      ]);

    }
}

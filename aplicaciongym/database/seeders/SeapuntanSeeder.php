<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\clase;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeapuntanSeeder extends Seeder
{
  use SoftDeletes;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('seapuntans')->insert([
        'clase_id'=> 1,
        'user_id'=>7
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 1,
        'user_id'=>8
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 1,
        'user_id'=>9
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 1,
        'user_id'=>10
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 2,
        'user_id'=>7
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 2,
        'user_id'=>8
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 2,
        'user_id'=>9
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 2,
        'user_id'=>10
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 3,
        'user_id'=>7
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 3,
        'user_id'=>8
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 3,
        'user_id'=>9
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 3,
        'user_id'=>10
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 16,
        'user_id'=>7
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 16,
        'user_id'=>8
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 16,
        'user_id'=>9
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 16,
        'user_id'=>10
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 6,
        'user_id'=>7
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 6,
        'user_id'=>8
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 6,
        'user_id'=>9
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 6,
        'user_id'=>10
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 9,
        'user_id'=>7
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 9,
        'user_id'=>8
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 9,
        'user_id'=>9
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 9,
        'user_id'=>10
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 12,
        'user_id'=>7
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 12,
        'user_id'=>8
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 12,
        'user_id'=>9
      ]);
      DB::table('seapuntans')->insert([
        'clase_id'=> 12,
        'user_id'=>10
      ]);
    }
}

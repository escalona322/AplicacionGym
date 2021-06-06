<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenamientos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('intensidad');
            $table->string('tipo');
            $table->string('nombre');
            $table->integer('repeticiones');
            $table->integer('series');
            $table->string('videoyt');
            $table->string('descripcion', 500);
            $table->string('Kcalorias');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrenamientos');
    }
}

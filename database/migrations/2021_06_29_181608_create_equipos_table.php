<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('equipo', 50)->nullable();
            $table->string('modelo', 50)->nullable();
            $table->string('marca', 50)->nullable();
            $table->string('nserie', 50)->nullable();
            $table->string('cudg', 50)->nullable();
            $table->text('description')->nullable();
            $table->string('status', 50)->nullable(); 
            $table->string('ubicacion', 50)->nullable(); 
            $table->float('cunitario')->nullable()->default(123.45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}

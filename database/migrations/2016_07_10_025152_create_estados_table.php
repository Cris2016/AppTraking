<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Estado;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',30);
            $table->string('nombre',30);
            $table->timestamps();
        });
        Schema::table('servicios', function (Blueprint $table) {
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
        });

        Estado::insert([
            ['nombre' => 'Pendiente', 'codigo' => 'pendiente'],
            ['nombre' => 'En proceso', 'codigo' => 'en_proceso'],
            ['nombre' => 'Completado', 'codigo' => 'completado'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estados');
    }
}

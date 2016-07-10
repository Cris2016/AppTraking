<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Rubro;

class CreateRubrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
        Schema::table('empresas', function (Blueprint $table) {
            $table->integer('rubro_id')->unsigned();
            $table->foreign('rubro_id')->references('id')->on('rubros');
        });

        Rubro::insert([
            ['name' => 'Electrónica'],
            ['name' => 'Mecánica'],
            ['name' => 'Salud y Belleza'],
            ['name' => 'Jurídico'],
            ['name' => 'Tintorería'],
            ['name' => 'Carpintería'],
            ['name' => 'Zapatería'],
            ['name' => 'Construcción'],
            ['name' => 'Otros'],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rubros');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacitacionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'capacitaciones';

    /**
     * Run the migrations.
     * @table capacitaciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('tipo_capacitacion', 100)->nullable();
            $table->string('institucion_C', 100)->nullable();
            $table->integer('horas')->nullable();
            $table->integer('ano_obtenido_capacitacion')->nullable();
            $table->string('pais_capacitacion', 45)->nullable();
            $table->unsignedInteger('profesores_codigo');

            $table->index(["profesores_codigo"], 'fk_capacitaciones_profesores_idx');


            $table->foreign('profesores_codigo', 'fk_capacitaciones_profesores_idx')
                ->references('codigo')->on('profesores')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'academica';

    /**
     * Run the migrations.
     * @table academica
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre_academica', 100)->nullable();
            $table->string('especialidad', 45)->nullable();
            $table->string('institucion_A', 100)->nullable();
            $table->string('nivel', 45)->nullable();
            $table->string('cedula', 50)->nullable();
            $table->string('ano_obtenido', 50)->nullable();
            $table->string('pais', 45)->nullable();
            $table->unsignedInteger('profesores_codigo');

            $table->index(["profesores_codigo"], 'fk_academica_profesores1_idx');


            $table->foreign('profesores_codigo', 'fk_academica_profesores1_idx')
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

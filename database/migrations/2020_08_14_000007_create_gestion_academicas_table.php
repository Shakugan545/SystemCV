<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionAcademicasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'gestion_academicas';

    /**
     * Run the migrations.
     * @table gestion_academicas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('institucion', 100)->nullable();
            $table->string('puesto', 100)->nullable();
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
            $table->unsignedInteger('profesores_codigo');

            $table->index(["profesores_codigo"], 'fk_gestion_academicas_profesores1_idx');


            $table->foreign('profesores_codigo', 'fk_gestion_academicas_profesores1_idx')
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

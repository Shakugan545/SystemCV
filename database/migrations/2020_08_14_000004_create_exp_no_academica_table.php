<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpNoAcademicaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'exp_no_academica';

    /**
     * Run the migrations.
     * @table exp_no_academica
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('institucion', 100)->nullable();
            $table->string('act_o_puesto', 100)->nullable();
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
            $table->unsignedInteger('profesores_codigo');

            $table->index(["profesores_codigo"], 'fk_exp_no_academica_profesores1_idx');


            $table->foreign('profesores_codigo', 'fk_exp_no_academica_profesores1_idx')
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

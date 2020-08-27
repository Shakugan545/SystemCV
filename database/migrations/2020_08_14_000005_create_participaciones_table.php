<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipacionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'participaciones';

    /**
     * Run the migrations.
     * @table participaciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre_participacion', 100)->nullable();
            $table->string('membresia', 45)->nullable();
            $table->string('membresia_act', 45)->nullable();
            $table->string('lvl_participacion', 45)->nullable();
            $table->string('aportaciones', 200)->nullable();
            $table->string('premios', 200)->nullable();
            $table->unsignedInteger('profesores_codigo');

            $table->index(["profesores_codigo"], 'fk_participaciones_profesores1_idx');


            $table->foreign('profesores_codigo', 'fk_participaciones_profesores1_idx')
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

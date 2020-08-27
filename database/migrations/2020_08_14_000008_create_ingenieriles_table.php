<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngenierilesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ingenieriles';

    /**
     * Run the migrations.
     * @table ingenieriles
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('organismo', 100)->nullable();
            $table->string('experiencia', 45)->nullable();
            $table->integer('anos')->nullable();
            $table->unsignedInteger('profesores_codigo');

            $table->index(["profesores_codigo"], 'fk_ingenieriles_profesores1_idx');


            $table->foreign('profesores_codigo', 'fk_ingenieriles_profesores1_idx')
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

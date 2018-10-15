<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'historias';

    /**
     * Run the migrations.
     * @table historias
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('fechaIngreso')->nullable();
            $table->string('codigo', 45)->nullable();
            $table->string('cedula', 10)->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('edad', 45)->nullable();
            $table->string('sexo', 45)->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono', 45)->nullable();
            $table->string('telefono2', 45)->nullable();
            $table->string('app')->nullable();
            $table->string('apf')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('ta')->nullable();
            $table->string('montivoConsulta')->nullable();
            $table->string('evaluacionFisica')->nullable();
            $table->string('diagnostico')->nullable();
            $table->string('tratamineto')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('dato1')->nullable();
            $table->string('dato2')->nullable();
            $table->string('dato3')->nullable();
            $table->string('dato4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}

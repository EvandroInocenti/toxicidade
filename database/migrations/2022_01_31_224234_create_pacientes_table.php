<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 160);
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->string('senha');
            $table->date('nascimento');
            $table->double('altura');
            $table->double('peso');
            $table->double('superficie_corporea');
            $table->string('telefone');
            $table->string('acesso');
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
        Schema::dropIfExists('pacientes');
    }
}

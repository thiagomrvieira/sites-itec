<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('slug');
            $table->boolean('status');
            $table->boolean('destaque');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categoria_noticias');
            $table->string('imagem')->nullable();
            $table->string('autor_imagem')->nullable();;
            $table->string('chapeu');
            $table->mediumText('intro');
            $table->string('reporter');
            $table->longText('texto');
            $table->dateTime('criado_em');	
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
        Schema::dropIfExists('noticias');
    }
}

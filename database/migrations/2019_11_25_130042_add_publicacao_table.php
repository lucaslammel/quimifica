<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPublicacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('texto');
            $table->integer('conteudo_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('publicacao', function (Blueprint $table) {
        $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        $table->foreign('conteudo_id')
            ->references('id')->on('conteudo')
            ->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacao');
    }
}

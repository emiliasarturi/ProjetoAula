<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');           //código identificador
            $table->string('titulo');           //titulo da mensagem
            $table->string('texto');            //texto da mensagem
            $table->string('autor');            //autor da mensagem
            $table->timestamps();               //registro created_at e updated_at
            $table->integer('atividade_id')->unsigned();
            $table->integer('user_id')->unsigned();
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('atividade_id')->references('id')->on('atividades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}

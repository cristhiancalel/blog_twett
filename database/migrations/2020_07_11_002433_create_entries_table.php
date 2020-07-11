<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            //autor 
            $table->unsignedBigInteger('user_id');
            //creacion de la llave foranea donde user_id es la columna que se creara y id es a la que hace referencia de la tabla users
            $table->foreign('user_id')->references('id')->on('users');            
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
        Schema::dropIfExists('entries');
    }
}

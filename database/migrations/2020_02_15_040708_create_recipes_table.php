<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');

            // $table->integer('user_id')->unsigned()->default(1);
            // $table->foreign('user_id')
            //       ->references('id')->on('users')
            //       ->onDelete('cascade');

            $table->string('title');
            $table->string('materials');
            $table->string('method');
            $table->string('image_path')->nullable();
            $table->timestamps('modified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}

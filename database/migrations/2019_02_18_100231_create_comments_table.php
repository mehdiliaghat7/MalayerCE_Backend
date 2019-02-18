<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Body');
            $table->text('Answer');
            $table->boolean('Confirm');
            $table->integer('User_id')->unsigned();
            $table->integer('Lesson_id')->unsigned();
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Lesson_id')->references('id')->on('lessons')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('comments');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professor_id')->unsigned();
            $table->string('lesson_id')->unique();

            $table->string('title');
            $table->string('file_ids')->nullable();
            $table->string('group');
            $table->enum('type', ['general', 'specialty', 'optional', 'basically', 'practical']);
            $table->string('unit');
            $table->text('classTimes');
            $table->string('examDate')->nullable();
            $table->integer('capacity');
            $table->integer('remained');
            $table->string('location')->nullable();

            $table->foreign('professor_id')
                ->references('id')
                ->on('professors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('create_date');
            $table->string('update_date')->nullable();
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
        Schema::dropIfExists('lessons');
    }
}

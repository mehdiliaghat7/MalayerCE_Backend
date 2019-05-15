<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_groups', function (Blueprint $table) {
            $table->increments('id');

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
        Schema::dropIfExists('lesson_groups');
    }
}

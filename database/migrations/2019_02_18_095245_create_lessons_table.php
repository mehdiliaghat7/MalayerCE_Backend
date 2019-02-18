<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('Title');
            $table->string('FileIDs');
            $table->string('Group');
            $table->enum('Type',['','']);
            $table->string('Unit');
            $table->text('ClassTime');
            $table->date('ExamDate');
            $table->integer('Capacity');
            $table->integer('Remain');
            $table->string('Location');
            $table->string('File');
            $table->integer('Lesson_id')->unsigned();
            $table->integer('Professor_id')->unsigned();
            $table->foreign('Lesson_id')->references('id')->on('lessons')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Professor_id')->references('id')->on('professors')->onDelete('cascade')->onUpdate('cascade');
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

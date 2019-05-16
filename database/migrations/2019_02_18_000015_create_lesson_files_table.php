<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_files', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('lesson_id')->unsigned();

            $table->string('title');
            $table->text('description')->nullable();
            $table->string('file');
            $table->enum('type', ['booklet', 'article', 'book']);
            $table->enum('status', ['public', 'private']);

            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
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
        Schema::dropIfExists('lesson_files');
    }
}

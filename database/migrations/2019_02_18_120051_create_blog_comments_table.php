<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Body');
            $table->text('Answer');
            $table->string('UserName');
            $table->boolean('Confirm');
            $table->boolean('Seen');
            $table->string('Flag');
            $table->integer('User_id')->nullable();
            $table->integer('Post_id')->unsigned();
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('blog_comments');
    }
}

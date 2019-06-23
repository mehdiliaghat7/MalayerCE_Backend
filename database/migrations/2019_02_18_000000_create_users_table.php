<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password',255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_code')->unique();
            $table->string('image')->nullable();
            $table->string('national_id')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('father_name')->nullable();
            $table->enum('type', [ 'student', 'professor']);
            $table->tinyInteger('confirmed')->default(0);
            $table->rememberToken();

            $table->string('create_date')->nullable();
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
        Schema::dropIfExists('users');
    }
}

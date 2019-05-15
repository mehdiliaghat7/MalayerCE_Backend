<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('professor_code')->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('resume_ids')->nullable();
            $table->enum('type', ['tuition', 'commission', 'head']);
            $table->text('presentTimes')->nullable();
            $table->string('password');
            $table->string('national_id')->unique();
            $table->string('email')->unique();
            $table->string('degree')->nullable();
            $table->string('field')->nullable();
            $table->tinyInteger('confirmed')->default(0);
            $table->enum('role', ['admin', 'manager', 'professor']);

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
        Schema::dropIfExists('professors');
    }
}

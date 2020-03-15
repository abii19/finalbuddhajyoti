<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_name');
            $table->string('phone_number');
            $table->string('address');
            $table->string('education_degree');
            $table->unsignedBigInteger('posts');
            $table->string('teacher_photo');

            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable();
//            $table->unsignedBigInteger('subject_id')->nullable();

            //          $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestemonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testemonials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('saying');
            $table->string('f_name');
            $table->string('type');
            $table->string('details');
            $table->boolean('status');
            $table->string('photo');
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
        Schema::dropIfExists('testemonials');
    }
}

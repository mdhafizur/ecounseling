<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->nullable();
            $table->foreign('student_id', '35989_5913ebf64ed0b')->references('id')->on('students')->onDelete('cascade');
            $table->integer('counselor_id')->unsigned()->nullable();
            $table->foreign('counselor_id', '35989_5913ebf652b9b')->references('id')->on('counselors')->onDelete('cascade');
            $table->datetime('date')->nullable();
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}

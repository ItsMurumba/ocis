<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('requests',function (Blueprint $table){
            $table->increments('id');
            $table->integer('studentId')->unsigned()->index();
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('studentId')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('requests');
    }
}

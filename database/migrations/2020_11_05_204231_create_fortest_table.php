<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFortestTable extends Migration
{

    public function up()
    {
        Schema::create('fortest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lname');
            if (Schema::hasColumn('fortest', 'lname')) {
                $table->string('nakename');
                $table->string('familyname');
                $table->string('countryname')();
            }

        });
    }


    public function down()
    {
        Schema::dropIfExists('fortest');
    }
}

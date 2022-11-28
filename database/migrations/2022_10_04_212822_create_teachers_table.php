<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('profile_image');
            $table->string('name');
            $table->string('emailID');
            $table->string('qualification');
            $table->date('DOB');
            $table->integer('phone');
            $table->date('date_of_posting');
            $table->string('gender');
            $table->string('father');
            $table->string('mother');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('pincode');
            $table->string('isactive');
            $table->integer('isdeleted');
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
        Schema::dropIfExists('teachers');
    }
};

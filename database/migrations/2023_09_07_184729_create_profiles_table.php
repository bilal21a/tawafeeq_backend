<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('type_of_marraige')->nullable();
            $table->string('matarial_status')->nullable();
            $table->string('age')->nullable();
            $table->string('no_of_childs')->nullable();
            $table->string('phone')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('skin_color')->nullable();
            $table->string('physique')->nullable();
            $table->string('job')->nullable();
            $table->string('qulification')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}

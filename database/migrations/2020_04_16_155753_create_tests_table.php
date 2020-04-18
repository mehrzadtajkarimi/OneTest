<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedMediumInteger('user_id');
            $table->unsignedInteger('lesson')->default(0);
            $table->unsignedTinyInteger('class')->default(0);
            $table->unsignedTinyInteger('grade')->default(0);
            $table->unsignedSmallInteger('school')->default(0);
            $table->unsignedTinyInteger('region')->default(0);
            $table->smallInteger('time');
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
        Schema::dropIfExists('tests');
    }
}
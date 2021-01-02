<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('Program ID');
            $table->timestamps();
            $table->string('BuildingU Program Type');
            $table->string('Program Title');
            $table->string('Program Area');
            $table->string('Program Skillset');
            $table->date('Program Start Date');
            $table->date('Program End Date');
            $table->string('Program Country');
            $table->string('Program City');
            $table->string('Program Address');
            $table->string('Program Hosting Organization');
            $table->bigInteger('Program Enrollement Space');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}

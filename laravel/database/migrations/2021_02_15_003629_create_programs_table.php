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
          $table->bigIncrements('id');
          $table->timestamps();
          $table->string('buildingU_Program_Type');
          $table->string('program_Title');
          $table->string('program_Area');
          $table->string('program_Skills');
          $table->date('program_Start_Date');
          $table->date('program_End_Date');
          $table->string('program_Country');
          $table->string('program_City');
          $table->string('program_Address');
          $table->string('program_Hosting_Organization');
          $table->bigInteger('program_Enrollement_Space');
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

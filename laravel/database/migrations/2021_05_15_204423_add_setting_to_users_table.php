<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSettingToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger("age")->nullable();
            $table->bigInteger("grade")->nullable();
            $table->string("ethnicity")->nullable();
            $table->string("language")->nullable();
            $table->json("interests")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("age");
            $table->dropColumn("grade");
            $table->dropColumn("ethnicity");
            $table->dropColumn("language");
            $table->dropColumn("interests");
        });
    }
}

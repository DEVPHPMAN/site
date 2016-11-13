<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumsMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * composer require doctrine/dbal
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
           $table->renameColumn('username','name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->renameColumn('name','username');
        });
    }
}

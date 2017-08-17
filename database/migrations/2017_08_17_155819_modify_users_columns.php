<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('country')->after('password');
            $table->string('avatarPath')->after('country');
            $table->string('description')->after('avatarPath');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('country')->after('password');
            $table->string('avatarPath')->after('country');
            $table->string('description')->after('avatarPath');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['country', 'avatarPath', 'description']);
        });
    }
}

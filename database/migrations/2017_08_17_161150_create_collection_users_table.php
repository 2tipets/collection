<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('collection_id')->unsigned();
            $table->foreign('collection_id')->references('id')->on('collection')->onDelete('cascade');
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
        Schema::table('collection_user', function (Blueprint $table) {
            $table->dropForeign('collection_user_users_id_foreign');
            $table->dropForeign('collection_user_collection_id_foreign');
        });

        Schema::dropIfExists('collection_users');
    }
}

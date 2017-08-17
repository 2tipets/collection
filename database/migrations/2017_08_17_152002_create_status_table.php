<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('yourFigure', function (Blueprint $table) {
            $table->increments('id');
            $table->string('purchase_price');
            $table->date('purchase_date');
            $table->string('sell_price');
            $table->date('sell_date');
            $table->string('storage_location');
            $table->integer('grade');
            $table->string('description');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('figure_id')->unsigned();
            $table->foreign('figure_id')->references('id')->on('figure')->onDelete('cascade');
            $table->integer('condition_id')->unsigned();
            $table->foreign('condition_id')->references('id')->on('condition')->onDelete('cascade');
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
        Schema::table('yourFigure', function (Blueprint $table) {
            $table->dropForeign('yourFigure_figure_id_foreign');
            $table->dropForeign('yourFigure_condition_id_foreign');
            $table->dropForeign('yourFigure_users_id_foreign');
        });
        Schema::dropIfExists('yourFigure');
        Schema::dropIfExists('condition');
    }
}

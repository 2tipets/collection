<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFigureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figure', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('year');
            $table->integer('collection_id')->unsigned();
            $table->foreign('collection_id')->references('id')->on('collection')->onDelete('cascade');
            $table->string('size');
            $table->string('picture');
            $table->integer('barcode');
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
        Schema::table('figure', function (Blueprint $table) {
            $table->dropForeign('figure_collection_id_foreign');
        });
        
        Schema::dropIfExists('figure');
    }
}

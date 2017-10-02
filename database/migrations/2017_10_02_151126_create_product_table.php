<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->text('description',100);
            $table->string('cover',100);
            $table->double('price');
            $table->dateTime('date_post');
            //$table->foreign('id_store')->references('id')->on('store');
            //$table->foreign('id_categorie')->references('id')->on('categorie');
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
        Schema::dropIfExists('product');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('user')->references('id')->on('User');
            $table->string('title');
            $table->foreign('author')->references('id')->on('Authors');

            $table->timestamps();
        });
    }

    public function review()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('book')->references('id')->on('Books');
            $table->string('author');
            $table->string('text');
        }
        );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}

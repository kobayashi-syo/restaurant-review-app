<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name','20');
            $table->integer('sex')->default(1);
            $table->integer('age');
            $table->string('mail','100');
            $table->integer('mail-sent')->default(1);
            $table->integer('mail-sent')->nullable()->change();
            $table->integer('review')->default(3);
            $table->string('opinion','300');
            $table->string('opinion','300')->nullable()->change();
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
        Schema::dropIfExists('reviews');
    }
};

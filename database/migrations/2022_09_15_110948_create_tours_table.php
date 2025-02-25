<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('region_id');
            $table->string('banner')->nullable();
            $table->string('day')->nullable();
            $table->string('night')->nullable();
            $table->string('image')->nullable();
            $table->string('head')->nullable();
            $table->longText('content')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->SoftDeletes();
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaychartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daycharts', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('tour_id');
            $table->string('day_head')->nullable();
            $table->string('day_content')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->SoftDeletes();
            $table->foreign('tour_id')->references('id')->on('tours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daycharts');
    }
}

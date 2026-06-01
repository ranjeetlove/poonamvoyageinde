<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_contents', function (Blueprint $table) {
            $table->id();
            // SEO Settings
            $table->string('page_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

            // Section 1
            $table->string('section1_heading')->nullable();
            $table->longText('section1_description')->nullable();

            // Section 2
            $table->string('section2_heading')->nullable();
            $table->longText('section2_description')->nullable();

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
        Schema::dropIfExists('homepage_contents');
    }
};

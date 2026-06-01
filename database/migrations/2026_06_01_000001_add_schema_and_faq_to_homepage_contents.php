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
        Schema::table('homepage_contents', function (Blueprint $table) {
            $table->text('schema')->nullable()->after('section2_description');
            // JSON columns for FAQs
            if (!Schema::hasColumn('homepage_contents','faq_questions')) {
                $table->json('faq_questions')->nullable()->after('schema');
            }
            if (!Schema::hasColumn('homepage_contents','faq_answers')) {
                $table->json('faq_answers')->nullable()->after('faq_questions');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homepage_contents', function (Blueprint $table) {
            if (Schema::hasColumn('homepage_contents','faq_answers')) {
                $table->dropColumn('faq_answers');
            }
            if (Schema::hasColumn('homepage_contents','faq_questions')) {
                $table->dropColumn('faq_questions');
            }
            if (Schema::hasColumn('homepage_contents','schema')) {
                $table->dropColumn('schema');
            }
        });
    }
};

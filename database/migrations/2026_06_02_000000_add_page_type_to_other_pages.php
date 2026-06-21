<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('other_pages', function (Blueprint $table) {
            if (!Schema::hasColumn('other_pages', 'page_type')) {
                $table->string('page_type')->after('id');
                $table->unique('page_type');
            }
        });

        DB::table('other_pages')->update(['page_type' => 'tailor-made-trip']);
    }

    public function down(): void
    {
        Schema::table('other_pages', function (Blueprint $table) {
            if (Schema::hasColumn('other_pages', 'page_type')) {
                $table->dropUnique(['page_type']);
                $table->dropColumn('page_type');
            }
        });
    }
};

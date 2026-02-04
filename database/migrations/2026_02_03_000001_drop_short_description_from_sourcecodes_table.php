<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sourcecodes', function (Blueprint $table) {
            $table->dropColumn('short_description');
        });
    }

    public function down(): void
    {
        Schema::table('sourcecodes', function (Blueprint $table) {
            $table->string('short_description', 500)->nullable()->after('thumbnail_path');
        });
    }
};

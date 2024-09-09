<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('managements', function (Blueprint $table) {
            // Menambahkan kolom setelah kolom 'existing_column_name'
            $table->string('image')->after('position');
            $table->string('twitter')->after('image');
            $table->string('facebook')->after('twitter');
            $table->string('instagram')->after('facebook');
            $table->string('linkedin')->after('instagram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('managements', function (Blueprint $table) {
            $table->dropColumn('twitter');
            $table->dropColumn('facebook');
            $table->dropColumn('instagram');
            $table->dropColumn('linkedin');
        });
    }
};

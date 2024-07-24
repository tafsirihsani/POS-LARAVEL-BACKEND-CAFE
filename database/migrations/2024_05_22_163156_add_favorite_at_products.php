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
        Schema::table('products', function (Blueprint $table) {
            //is_favorite
            $table->boolean('is_favorite')->dafault(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //is_favorite
            $table->dropColumn('is_favorite');
        });
    }


    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::table('products', function (Blueprint $table) {
    //         //is_favorite
    //         $table->boolean('is_best_seller')->dafault(false);
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::table('products', function (Blueprint $table) {
    //         //is_favorite
    //         $table->dropColumn('is_best_seller');
    //     });
    // }
};
